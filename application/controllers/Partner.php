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
            $this->where = ['id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->partner_model->get($this->where)
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
            'maintain'      => $this->maintain_partner->get($where),
            'activities'    => $this->partner_activity->get($where),
            'comments'      => $this->comment_model->get($where)
        ];
        $this->template->load('template/index', 'partner-detail', $data);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

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
            'jenis_pembayaran'      => !empty($post['jenis_pembayaran'])        ? $post['jenis_pembayaran'] : NULL,
            'omset'                 => !empty($post['omset'])                   ? $post['omset'] : NULL,

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
            'akhir_izin'            => !empty($post['akhir_izin'])              ? $post['akhir_izin'] : NULL,

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
                'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                'date_pending'  => date('Y-m-d H:i:s'),
                'id_partner'    => $id,
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $id_ticket = $this->ticket_model->create($ticket);

            //Notifikasi
            // $notification = [
            //     'pengirim'      => $this->fungsi->user_login()->id_user,
            //     'type'          => 'Data Partner Baru',
            //     'id_ticket'    => $id_ticket,
            //     'created_at'    => date('Y-m-d H:i:s')
            // ];
            // $this->notification_model->create($notification);
        }


        if ($id) {
            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Partner berhasil disimpan. <a href='#'>Lihat Data</a>");

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
            'jenis_pembayaran'      => !empty($post['jenis_pembayaran'])        ? $post['jenis_pembayaran'] : NULL,
            'omset'                 => !empty($post['omset'])                   ? $post['omset'] : NULL,

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
            'akhir_izin'            => !empty($post['akhir_izin'])              ? $post['akhir_izin'] : NULL,

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

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            //Menambah antrian tiket untuk data Agent
            $has_superior = $this->fungsi->user_login()->has_superior;
            $data['status'] = 'lengkap';

            $ticket = [
                'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                'date_pending'  => date('Y-m-d H:i:s'),
                'id_partner'    => $post['id_partner'],
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $this->ticket_model->create($ticket);
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
            // 'bentuk_usaha'          => $post['bentuk_usaha'],
            'kelurahan'             => $post['kelurahan'],
            'kecamatan'             => $post['kecamatan'],
            'kode_pos'              => $post['kode_pos'],
            'provinsi'              => $post['provinsi'],
            'status_tempat_usaha'   => $post['status_tempat_usaha'],
            'tahun_berdiri'         => $post['tahun_berdiri'],
            'jumlah_karyawan'       => $post['jumlah_karyawan']
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

        //Meng-update antrian tiket untuk data Agent
        $has_superior = $this->fungsi->user_login()->has_superior;
        $ticket = [
            'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
            'date_pending'  => date('Y-m-d H:i:s'),
            // 'id_user'       => $this->fungsi->user_login()->id_user,
            // 'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $where_ticket = ['id_ticket' => $post['id_ticket']];
        $this->ticket_model->update($ticket, $where_ticket);


        redirect('Partner');
    }
}
