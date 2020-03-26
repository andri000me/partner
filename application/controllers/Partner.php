<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public $where;

    public function __construct()
    {
        parent::__construct();
        // Load Modul Partner
        $this->load->model('partner_model');
        // Load Modul Ticket
        $this->load->model('ticket_model');
        // Load Modul Partner Activity
        $this->load->model('partner_activity_model', 'partner_activity');
        // Load Modul Mapping Partner 
        $this->load->model('mapping_partner_model', 'mapping_partner');
        // Load Modul Maintain Partner 
        $this->load->model('maintain_partner_model', 'maintain_partner');
        //Load Modul Comment
        $this->load->model('comment_model');
        //Load Modul notification
        $this->load->model('notification_model');

        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "id_branch = " . $this->fungsi->user_login()->id_branch;
        } else {
            $this->where = "id_partner IS NOT NULL AND status = 'lengkap'";
        }

        check_not_login();
    }

    //Notification Method
    private function notification($id_ticket, $message)
    {
        $notification = [
            'pengirim'          => $this->fungsi->user_login()->id_user,
            // 'penerima'          => $this->ticket_model->get(['id_ticket' => $id_ticket])->row()->user_id,
            'penerima_cabang'   => 46,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $notification;
    }

    public function index()
    {
        // $merge = array_merge($this->where, ['status' => 'lengkap']);
        $data = [
            'data' => $this->partner_model->get($this->where),
            'lengkap' => $this->partner_model->get("status = 'lengkap' AND " . $this->where)
        ];

        $this->template->load('template/index', 'partner', $data);
    }

    public function create()
    {
        $data = [
            'data' => $this->partner_model->get(),
            'mappings' => $this->mapping_partner->get($this->where)
        ];

        $this->template->load('template/index', 'partner-form', $data);
    }

    public function edit($id)
    {
        $where = ['partners.id_partner' => $id];

        $data = [
            'data' => $this->partner_model->get($where)->row(),
            'mappings' => $this->mapping_partner->get($this->where)
        ];

        $this->template->load('template/index', 'partner-edit', $data);
    }

    public function detail($id)
    {
        $where = ['partners.id_partner' => $id];

        $data = [
            'data'          => $this->partner_model->get($where)->row(),
            'ticket'        => $this->ticket_model->get($where)->row(),
            'maintains'      => $this->maintain_partner->get($where),
            'activities'    => $this->partner_activity->get($where),
            'comments'      => $this->comment_model->get($where)
        ];
        $this->template->load('template/index', 'partner-detail', $data);
        // echo json_encode($data['data']);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);


        // $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        // $this->form_validation->set_rules('telepon', 'Telepon', 'is_unique[mapping_partners.telepon]', ['is_unique' => 'Nomor telepon sudah terdaftar, mohon ganti nomor telepon']);
        // $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[mapping_partners.email]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti Alamat E-mail']);

        // if ($this->form_validation->run() != FALSE) {
        // meng-update data mapping jika berubah
        $data_mapping = [
            'nama_usaha'        => $post['nama_usaha'],
            'email'             => $post['email'],
            'telepon'           => $post['telepon'],
            'kategori_produk'   => $post['kategori_produk'],
            'bidang_usaha'      => $post['bidang_usaha'],
            'bentuk_usaha'      => $post['bentuk_usaha'],
            'alamat'            => $post['alamat']
        ];

        $where_mapping = ['id_mapping' => $post['id_mapping']];

        //Bagian ini jika user menginput data leads langsung tanpa mengambil 
        //Jika ID Mapping sudah terisi maka update data id mapping yang sudah ada
        if ($post['id_mapping'] != '' || $post['id_mapping'] != NULL) {
            $this->mapping_partner->update($data_mapping, $where_mapping);
        } else {
            $data_mapping['created_at'] = date('Y-m-d H:i:s');
            $data_mapping['updated_at'] = date('Y-m-d H:i:s');
            $data_mapping['id_user'] = $this->fungsi->user_login()->id_user;
            $data_mapping['id_branch'] = $this->fungsi->user_login()->id_branch;

            $id_mapping = $this->mapping_partner->create($data_mapping);
        }

        // $this->mapping_partner->update($data_mapping, $where_mapping);                             
        $data = [
            //ID Mapping
            'id_mapping'            => ($post['id_mapping'] != '' || $post['id_mapping'] != NULL) ? $post['id_mapping'] : $id_mapping,

            //Stage 1
            'kelurahan'             => !empty($post['kelurahan'])               ? $post['kelurahan'] : NULL,
            'kecamatan'             => !empty($post['kecamatan'])               ? $post['kecamatan'] : NULL,
            'kode_pos'              => !empty($post['kode_pos'])                ? $post['kode_pos'] : NULL,
            'provinsi'              => !empty($post['provinsi'])                ? $post['provinsi'] : NULL,
            'status_tempat_usaha'   => !empty($post['status_tempat_usaha'])     ? $post['status_tempat_usaha'] : NULL,
            // 'bentuk_usaha'          => !empty($post['bentuk_usaha'])            ? $post['bentuk_usaha'] : NULL,
            'jumlah_karyawan'       => !empty($post['jumlah_karyawan'])         ? $post['jumlah_karyawan'] : NULL,
            'tahun_berdiri'         => !empty($post['tahun_berdiri'])           ? $post['tahun_berdiri'] : NULL,

            //Stage 2
            'nama_pemilik'          => !empty($post['nama_pemilik'])            ? $post['nama_pemilik'] : NULL,
            'barang_jual'           => !empty($post['barang_jual'])             ? $post['barang_jual'] : NULL,
            'sosial_media'          => !empty($post['sosial_media'])            ? $post['sosial_media'] : NULL,
            'hobi'                  => !empty($post['hobi'])                    ? $post['hobi'] : NULL,
            'jenis_pembayaran'      => !empty($post['jenis_pembayaran'])        ? implode(",", $post['jenis_pembayaran']) : NULL,
            'omset'                 => !empty($post['omset'])                   ? str_replace(",", "", $post['omset']) : NULL,
            'jumlah_cabang'         => !empty($post['jumlah_cabang'])           ? $post['jumlah_cabang'] : NULL,
            'pernah_promosi'        => !empty($post['pernah_promosi'])          ? $post['pernah_promosi'] : NULL,
            'punya_pinjaman'        => !empty($post['punya_pinjaman'])          ? $post['punya_pinjaman'] : NULL,
            'on_going_project'      => !empty($post['on_going_project'])        ? $post['on_going_project'] : NULL,
            'punya_jumlah_plafond'  => !empty($post['punya_jumlah_plafond'])    ? $post['punya_jumlah_plafond'] : NULL,
            'punya_giro_cek'        => !empty($post['punya_giro_cek'])          ? $post['punya_giro_cek'] : NULL,
            'keterangan_tambahan'   => !empty($post['keterangan_tambahan'])     ? $post['keterangan_tambahan'] : NULL,
            'rekening_bank'         => !empty($post['rekening_bank'])           ? $post['rekening_bank'] : NULL,
            'cabang_bank'           => !empty($post['cabang_bank'])             ? $post['cabang_bank'] : NULL,
            'nama_bank'             => !empty($post['nama_bank'])               ? $post['nama_bank'] : NULL,
            'atas_nama'             => !empty($post['atas_nama'])               ? $post['atas_nama'] : NULL,
            'sudah_mou'            => !empty($post['sudah_mou'])                ? $post['sudah_mou'] : NULL,


            //Timestamp
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        //Konfigurasi Upload
        $config['upload_path']         = './uploads/partners';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ktp')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['ktp'] = $this->upload->data('file_name');
        }


        if (!$this->upload->do_upload('npwp')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['npwp'] = $this->upload->data('file_name');
        }


        if (!$this->upload->do_upload('buku_tabungan_perusahaan')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['buku_tabungan_perusahaan'] = $this->upload->data('file_name');
        }


        if (!$this->upload->do_upload('siup')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['siup'] = $this->upload->data('file_name');
        }


        if (!$this->upload->do_upload('logo_perusahaan')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['logo_perusahaan'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('foto_usaha')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['foto_usaha'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('foto_mou')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['foto_mou'] = $this->upload->data('file_name');
        }

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';
        }

        $id = $this->partner_model->create($data);


        //Membuat history activity inputan data partner
        $partner_activity = [
            'activity' => 'Data Partner telah dibuat',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_partner' => $id,
            'id_user' => $post['id_user']
        ];

        $this->partner_activity->create($partner_activity);

        //Menambah antrian tiket untuk data Partner
        if (isset($post['process'])) {
            //Menambah antrian tiket untuk data Agent
            $has_superior = $this->fungsi->user_login()->has_superior;
            $ticket = [
                // 'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                'status'        => 2,
                'date_pending'  => date('Y-m-d H:i:s'),
                'date_created'  => date('Y-m-d H:i:s'),
                'date_modified'  => date('Y-m-d H:i:s'),
                'id_partner'    => $id,

                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];

            if (!$this->upload->do_upload('foto_mou')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                if (!empty($post['foto_mou'])) {
                    $ticket['form_mou'] = $post['foto_mou'];
                }
            } else {
                $ticket['form_mou'] = $this->upload->data('file_name');
                $ticket['ttd_pks'] = 'Ya';
                $ticket['date_verified_ttd'] = date('Y-m-d H:i:s');
                $ticket['verified_by'] = $this->fungsi->user_login()->id_user;
            }

            $id_ticket = $this->ticket_model->create($ticket);

            //Membuat notifikasi tiket baru untuk Admin
            $notification = $this->notification($id_ticket, 'Tiket Baru');
            $this->notification_model->create($notification);
        }
        if ($id) {
            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Partner berhasil disimpan. <a href='#'>Lihat Data</a>");

            sleep(6);
            redirect('Partner');
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data_mapping = [
            'nama_usaha'        => $post['nama_usaha'],
            'email'             => $post['email'],
            'telepon'           => $post['telepon'],
            'kategori_produk'   => $post['kategori_produk'],
            'bidang_usaha'      => $post['bidang_usaha'],
            'bentuk_usaha'      => $post['bentuk_usaha'],
            'alamat'            => $post['alamat']
        ];

        $where_mapping = ['id_mapping' => $post['id_mapping']];

        $this->mapping_partner->update($data_mapping, $where_mapping);

        $data = [
            //ID Mapping
            'id_mapping'            => !empty($post['id_mapping']) ? $post['id_mapping'] : NULL,


            //Stage 1
            'kelurahan'             => !empty($post['kelurahan'])               ? $post['kelurahan'] : NULL,
            'kecamatan'             => !empty($post['kecamatan'])               ? $post['kecamatan'] : NULL,
            'provinsi'              => !empty($post['provinsi'])                ? $post['provinsi'] : NULL,
            'kode_pos'              => !empty($post['kode_pos'])                ? $post['kode_pos'] : NULL,
            'nama_pemilik'          => !empty($post['nama_pemilik'])            ? $post['nama_pemilik'] : NULL,
            'hobi'                  => !empty($post['hobi'])                    ? $post['hobi'] : NULL,
            // 'bentuk_usaha'          => !empty($post['bentuk_usaha'])            ? $post['bentuk_usaha'] : NULL,
            'jumlah_karyawan'       => !empty($post['jumlah_karyawan'])         ? $post['jumlah_karyawan'] : NULL,
            'tahun_berdiri'         => !empty($post['tahun_berdiri'])           ? $post['tahun_berdiri'] : NULL,
            'barang_jual'           => !empty($post['barang_jual'])             ? $post['barang_jual'] : NULL,
            'sosial_media'          => !empty($post['sosial_media'])            ? $post['sosial_media'] : NULL,
            'status_tempat_usaha'   => !empty($post['status_tempat_usaha'])     ? $post['status_tempat_usaha'] : NULL,
            'jenis_pembayaran'      => !empty($post['jenis_pembayaran'])        ? implode(",", $post['jenis_pembayaran']) : NULL,
            'omset'                 => !empty($post['omset'])                   ? str_replace(",", "", $post['omset']) : NULL,

            //Stage 2
            'jumlah_cabang'         => !empty($post['jumlah_cabang'])           ? $post['jumlah_cabang'] : NULL,
            'pernah_promosi'        => !empty($post['pernah_promosi'])          ? $post['pernah_promosi'] : NULL,
            'punya_pinjaman'        => !empty($post['punya_pinjaman'])          ? $post['punya_pinjaman'] : NULL,
            'on_going_project'      => !empty($post['on_going_project'])        ? $post['on_going_project'] : NULL,
            'punya_jumlah_plafond'  => !empty($post['punya_jumlah_plafond'])    ? $post['punya_jumlah_plafond'] : NULL,
            'punya_giro_cek'        => !empty($post['punya_giro_cek'])          ? $post['punya_giro_cek'] : NULL,
            'keterangan_tambahan'   => !empty($post['keterangan_tambahan'])     ? $post['keterangan_tambahan'] : NULL,
            'rekening_bank'         => !empty($post['rekening_bank'])           ? $post['rekening_bank'] : NULL,
            'cabang_bank'           => !empty($post['cabang_bank'])             ? $post['cabang_bank'] : NULL,
            'nama_bank'             => !empty($post['nama_bank'])               ? $post['nama_bank'] : NULL,
            'atas_nama'             => !empty($post['atas_nama'])               ? $post['atas_nama'] : NULL,
            'sudah_mou'            => !empty($post['sudah_mou'])                ? $post['sudah_mou'] : NULL,


            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        //Konfigurasi Upload
        $config['upload_path']         = './uploads/partners';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ktp')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['ktp'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('npwp')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['npwp'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('buku_tabungan_perusahaan')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['buku_tabungan_perusahaan'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('siup')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['siup'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('logo_perusahaan')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['logo_perusahaan'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('foto_usaha')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['foto_usaha'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('foto_mou')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['foto_mou'] = $this->upload->data('file_name');
        }

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            //Menambah antrian tiket untuk data Agent
            $has_superior = $this->fungsi->user_login()->has_superior;
            $data['status'] = 'lengkap';

            $ticket = [
                // 'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                'status'        => 2,
                'date_pending'  => date('Y-m-d H:i:s'),
                // 'date_created'  => date('Y-m-d H:i:s'),
                'date_modified'  => date('Y-m-d H:i:s'),
                'id_partner'    => $post['id_partner'],
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];

            if ($post['sudah_mou'] == "Ya") {
                if (!$this->upload->do_upload('foto_mou')) {
                    $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                } else {
                    $ticket['form_mou'] = $this->upload->data('file_name');
                    $ticket['ttd_pks'] = 'Ya';
                    $ticket['form_mou'] = $post['foto_mou'];
                    $ticket['date_verified_ttd'] = date('Y-m-d H:i:s');
                    $ticket['verified_by'] = $this->fungsi->user_login()->id_user;
                }
            }


            $id_ticket = $this->ticket_model->create($ticket);

            //Membuat notifikasi tiket baru untuk Admin
            $notification = $this->notification($id_ticket, 'Tiket Baru');
            $this->notification_model->create($notification);
        }

        //Memasukkan data mapping ke database `partners`
        $where = ['id_partner' => $post['id_partner']];
        $id = $this->partner_model->update($data, $where);

        //Membuat history activity inputan data partner
        $partner_activity = [
            'activity'      => 'Perubahan pada data Partner',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_partner'    => $post['id_partner'],
            'id_user'       => $post['id_user']
        ];

        $this->partner_activity->create($partner_activity);

        if ($id) {
            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil disimpan. <a href='#'>Lihat Data</a>");

            sleep(6);
            redirect('Partner');
        }
    }

    public function update_detail()
    {
        $post = $this->input->post(NULL, TRUE);

        $data_mapping = [
            'nama_usaha'        => $post['nama_usaha'],
            'email'             => $post['email'],
            'telepon'           => $post['telepon'],
            'kategori_produk'   => $post['kategori_produk'],
            'bidang_usaha'      => $post['bidang_usaha'],
            'bentuk_usaha'      => $post['bentuk_usaha'],
            'alamat'            => $post['alamat']
        ];

        $where_mapping = ['id_mapping' => $post['id_mapping']];

        $this->mapping_partner->update($data_mapping, $where_mapping);

        $data_partner = [
            //Stage 1
            'kelurahan'             => !empty($post['kelurahan'])               ? $post['kelurahan'] : NULL,
            'kecamatan'             => !empty($post['kecamatan'])               ? $post['kecamatan'] : NULL,
            'kode_pos'              => !empty($post['kode_pos'])                ? $post['kode_pos'] : NULL,
            'provinsi'              => !empty($post['provinsi'])                ? $post['provinsi'] : NULL,
            'status_tempat_usaha'   => !empty($post['status_tempat_usaha'])     ? $post['status_tempat_usaha'] : NULL,
            'jumlah_karyawan'       => !empty($post['jumlah_karyawan'])         ? $post['jumlah_karyawan'] : NULL,
            'tahun_berdiri'         => !empty($post['tahun_berdiri'])           ? $post['tahun_berdiri'] : NULL,

            //Stage 2
            'nama_pemilik'          => !empty($post['nama_pemilik'])            ? $post['nama_pemilik'] : NULL,
            'barang_jual'           => !empty($post['barang_jual'])             ? $post['barang_jual'] : NULL,
            'sosial_media'          => !empty($post['sosial_media'])            ? $post['sosial_media'] : NULL,
            'hobi'                  => !empty($post['hobi'])                    ? $post['hobi'] : NULL,
            'jenis_pembayaran'      => !empty($post['jenis_pembayaran'])        ? implode(",", $post['jenis_pembayaran']) : NULL,
            'omset'                 => !empty($post['omset'])                   ? str_replace(",", "", $post['omset']) : NULL,
            'jumlah_cabang'         => !empty($post['jumlah_cabang'])           ? $post['jumlah_cabang'] : NULL,
            'pernah_promosi'        => !empty($post['pernah_promosi'])          ? $post['pernah_promosi'] : NULL,
            'punya_pinjaman'        => !empty($post['punya_pinjaman'])          ? $post['punya_pinjaman'] : NULL,
            'on_going_project'      => !empty($post['on_going_project'])        ? $post['on_going_project'] : NULL,
            'punya_jumlah_plafond'  => !empty($post['punya_jumlah_plafond'])    ? $post['punya_jumlah_plafond'] : NULL,
            'punya_giro_cek'        => !empty($post['punya_giro_cek'])          ? $post['punya_giro_cek'] : NULL,
            'keterangan_tambahan'   => !empty($post['keterangan_tambahan'])     ? $post['keterangan_tambahan'] : NULL,
            'rekening_bank'         => !empty($post['rekening_bank'])           ? $post['rekening_bank'] : NULL,
            'cabang_bank'           => !empty($post['cabang_bank'])             ? $post['cabang_bank'] : NULL,
            'nama_bank'             => !empty($post['nama_bank'])               ? $post['nama_bank'] : NULL,
            'atas_nama'             => !empty($post['atas_nama'])               ? $post['atas_nama'] : NULL,
            'sudah_mou'            => !empty($post['sudah_mou'])                ? $post['sudah_mou'] : NULL,


            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $where_partner = ['id_partner' => $post['id_partner']];

        $this->partner_model->update($data_partner, $where_partner);

        //Membuat history activity inputan data partner
        $partner_activity = [
            'activity' => 'Perubahan pada data Partner',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_partner' => $post['id_partner'],
            'id_user' => $post['id_user']
        ];

        $this->partner_activity->create($partner_activity);

        //Membuat notifikasi Perubahan Data untuk Admin
        $notification = $this->notification($post['id_ticket'], 'Perubahan Data');
        $this->notification_model->create($notification);

        //Meng-update antrian tiket untuk data Agent
        $has_superior = $this->fungsi->user_login()->has_superior;
        $ticket = [
            // 'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            // 'date_created'  => date('Y-m-d H:i:s'),
            'date_modified'  => date('Y-m-d H:i:s'),
            // 'id_user'       => $this->fungsi->user_login()->id_user,
            // 'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $where_ticket = ['id_ticket' => $post['id_ticket']];
        $this->ticket_model->update($ticket, $where_ticket);


        redirect($post['redirect']);
    }

    public function tambah_lampiran()
    {

        $post = $this->input->post(NULL, TRUE);

        $data = [];

        $lampiran_arr = [];

        //Count total file
        $countfiles = count($_FILES['tambah_lampiran']['name']);

        //Looping all files
        for ($i = 0; $i < $countfiles; $i++) {
            if (!empty($_FILES['tambah_lampiran']['name'][$i])) {
                $_FILES['file']['name'] = $_FILES['tambah_lampiran']['name'][$i];
                $_FILES['file']['type'] = $_FILES['tambah_lampiran']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['tambah_lampiran']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['tambah_lampiran']['error'][$i];
                $_FILES['file']['size'] = $_FILES['tambah_lampiran']['size'][$i];



                //Konfigurasi Upload
                $config['upload_path']         = './uploads/partners';
                $config['allowed_types']        = '*';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                // $config['file_name']            = $_FILES['tambah_lampiran']['name'][$i]; 

                // Load upload library
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];


                    // Initialize array
                    $data['filenames'][] = $filename;

                    $lampiran_arr[] = $filename;
                }
            }
        }
        $comma = implode(",", $lampiran_arr);
        $data_partner['lampiran_tambahan'] = $comma;
        $where = ['id_partner' => $post['id_partner']];
        $this->partner_model->update($data_partner, $where);

        redirect($post['redirect']);
    }

    //check duplicate
    public function check_duplicate($field, $value)
    {
        // if($id == NULL){
        $check = $this->partner_model->get("$field = '$value'");
        if ($check->num_rows() == 0) {
            echo 'available';
        } else {
            echo 'not available';
        }
        // }
    }
}