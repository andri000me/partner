<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner_model');
        $this->load->model('partner_activity_model', 'partner_activity');
        $this->load->model('mapping_partner_model', 'mapping_partner');

        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->partner_model->get()
        ];

        $this->template->load('template/index', 'partner', $data);
    }

    public function create()
    {
        $data = [
            'data' => $this->partner_model->get(),
            'mapping' => $this->mapping_partner->get()

        ];

        $this->template->load('template/index', 'partner-form', $data);
    }


    public function detail($id)
    {
        $where = ['id_partner' => $id];

        $data = [
            'data' => $this->partner_model->get($where)->row()
        ];
        $this->template->load('template/index', 'mapping', $data);
    }

    public function edit($id)
    {
        $where = ['id_partner' => $id];

        $data = [
            'partner' => $this->partner_model->get($where)->row(),
            'mapping' => $this->mapping_partner->get()
        ];

        $this->template->load('template/index', 'partner-edit', $data);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            //ID Mapping
            'id_mapping'            => !empty($post['id_mapping']) ? $post['id_mapping'] : NULL,

            //Stage 1
            'kelurahan'             => !empty($post['kelurahan']) ? $post['kelurahan'] : NULL,
            'kecamatan'             => !empty($post['kecamatan']) ? $post['kecamatan'] : NULL,
            'provinsi'              => !empty($post['provinsi']) ? $post['provinsi'] : NULL,
            'kode_pos'              => !empty($post['kode_pos']) ? $post['kode_pos'] : NULL,
            'nama_pemilik'          => !empty($post['nama_pemilik']) ? $post['nama_pemilik'] : NULL,
            'hobi'                  => !empty($post['hobi']) ? $post['hobi'] : NULL,
            'bentuk_usaha'          => !empty($post['bentuk_usaha']) ? $post['bentuk_usaha'] : NULL,
            'jumlah_karyawan'       => !empty($post['jumlah_karyawan']) ? $post['jumlah_karyawan'] : NULL,
            'tahun_berdiri'         => !empty($post['tahun_berdiri']) ? $post['tahun_berdiri'] : NULL,
            'barang_jual'           => !empty($post['barang_jual']) ? $post['barang_jual'] : NULL,
            'sosial_media'          => !empty($post['sosial_media']) ? $post['sosial_media'] : NULL,
            'status_tempat_usaha'   => !empty($post['status_tempat_usaha']) ? $post['status_tempat_usaha'] : NULL,
            'jenis_pembayaran'      => !empty($post['jenis_pembayaran']) ? $post['jenis_pembayaran'] : NULL,
            'omset'                 => !empty($post['omset']) ? $post['omset'] : NULL,

            //Stage 2
            'jumlah_cabang'         => !empty($post['jumlah_cabang']) ? $post['jumlah_cabang'] : NULL,
            'pernah_promosi'        => !empty($post['pernah_promosi']) ? $post['pernah_promosi'] : NULL,
            'punya_pinjaman'        => !empty($post['punya_pinjaman']) ? $post['punya_pinjaman'] : NULL,
            'on_going_project'      => !empty($post['on_going_project']) ? $post['on_going_project'] : NULL,
            'punya_jumlah_plafond'  => !empty($post['punya_jumlah_plafond']) ? $post['punya_jumlah_plafond'] : NULL,
            'punya_giro_cek'        => !empty($post['punya_giro_cek']) ? $post['punya_giro_cek'] : NULL,
            'keterangan_tambahan'   => !empty($post['keterangan_tambahan']) ? $post['keterangan_tambahan'] : NULL,
            'rekening_bank'         => !empty($post['rekening_bank']) ? $post['rekening_bank'] : NULL,
            'cabang_bank'           => !empty($post['cabang_bank']) ? $post['cabang_bank'] : NULL,
            'nama_bank'             => !empty($post['nama_bank']) ? $post['nama_bank'] : NULL,
            'atas_nama'             => !empty($post['atas_nama']) ? $post['atas_nama'] : NULL,
            'akhir_izin'            => !empty($post['akhir_izin']) ? $post['akhir_izin'] : NULL,

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
            $this->upload->data('file_name');
        }
        //Konfigurasi Upload


        if (!$this->upload->do_upload('npwp')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $this->upload->data('file_name');
        }
        //Konfigurasi Upload


        if (!$this->upload->do_upload('buku_tabungan_perusahaan')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $this->upload->data('file_name');
        }
        //Konfigurasi Upload


        if (!$this->upload->do_upload('siup')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $this->upload->data('file_name');
        }
        //Konfigurasi Upload


        if (!$this->upload->do_upload('logo_perusahaan')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $this->upload->data('file_name');
        }


        if (!$this->upload->do_upload('foto_usaha')) {
            $upload =  $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $upload = $this->upload->data('file_name');
        }

        //Memasukkan data mapping ke database `partners`
        // $where = ['id_partner' => $post['id_partner']];

        $id = $this->partner_model->create($data);

        $partner_activity = [
            'activity' => 'Data Partner pertama dibuat',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_partner' => $id,
            'id_user' => $post['id_user']
        ];

        $this->partner_activity->create($partner_activity);

        if ($id) {
            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Partner');
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            //ID Mapping
            'id_mapping'            => !empty($post['id_mapping']) ? $post['id_mapping'] : NULL,

            //Stage 1
            'kelurahan'             => !empty($post['kelurahan']) ? $post['kelurahan'] : NULL,
            'kecamatan'             => !empty($post['kecamatan']) ? $post['kecamatan'] : NULL,
            'provinsi'              => !empty($post['provinsi']) ? $post['provinsi'] : NULL,
            'kode_pos'              => !empty($post['kode_pos']) ? $post['kode_pos'] : NULL,
            'nama_pemilik'          => !empty($post['nama_pemilik']) ? $post['nama_pemilik'] : NULL,
            'hobi'                  => !empty($post['hobi']) ? $post['hobi'] : NULL,
            'bentuk_usaha'          => !empty($post['bentuk_usaha']) ? $post['bentuk_usaha'] : NULL,
            'jumlah_karyawan'       => !empty($post['jumlah_karyawan']) ? $post['jumlah_karyawan'] : NULL,
            'tahun_berdiri'         => !empty($post['tahun_berdiri']) ? $post['tahun_berdiri'] : NULL,
            'barang_jual'           => !empty($post['barang_jual']) ? $post['barang_jual'] : NULL,
            'sosial_media'          => !empty($post['sosial_media']) ? $post['sosial_media'] : NULL,
            'status_tempat_usaha'   => !empty($post['status_tempat_usaha']) ? $post['status_tempat_usaha'] : NULL,
            'jenis_pembayaran'      => !empty($post['jenis_pembayaran']) ? $post['jenis_pembayaran'] : NULL,
            'omset'                 => !empty($post['omset']) ? $post['omset'] : NULL,

            //Stage 2
            'jumlah_cabang'         => !empty($post['jumlah_cabang']) ? $post['jumlah_cabang'] : NULL,
            'pernah_promosi'        => !empty($post['pernah_promosi']) ? $post['pernah_promosi'] : NULL,
            'punya_pinjaman'        => !empty($post['punya_pinjaman']) ? $post['punya_pinjaman'] : NULL,
            'on_going_project'      => !empty($post['on_going_project']) ? $post['on_going_project'] : NULL,
            'punya_jumlah_plafond'  => !empty($post['punya_jumlah_plafond']) ? $post['punya_jumlah_plafond'] : NULL,
            'punya_giro_cek'        => !empty($post['punya_giro_cek']) ? $post['punya_giro_cek'] : NULL,
            'keterangan_tambahan'   => !empty($post['keterangan_tambahan']) ? $post['keterangan_tambahan'] : NULL,
            'rekening_bank'         => !empty($post['rekening_bank']) ? $post['rekening_bank'] : NULL,
            'cabang_bank'           => !empty($post['cabang_bank']) ? $post['cabang_bank'] : NULL,
            'nama_bank'             => !empty($post['nama_bank']) ? $post['nama_bank'] : NULL,
            'atas_nama'             => !empty($post['atas_nama']) ? $post['atas_nama'] : NULL,
            'akhir_izin'            => !empty($post['akhir_izin']) ? $post['akhir_izin'] : NULL,

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

        //Memasukkan data mapping ke database `partners`
        $where = ['id_partner' => $post['id_partner']];

        $id = $this->partner_model->update($data, $where);

        //Membuat history activity inputan data partner
        $partner_activity = [
            'activity' => 'Perubahan pada data partner',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_partner' => $post['id_partner'],
            'id_user' => $post['id_user']
        ];

        $this->partner_activity->create($partner_activity);

        if ($id) {
            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Partner');
        }
    }
}
