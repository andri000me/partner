<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner_model');
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

        $this->template->load('template/index', 'wizardform', $data);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [

            //Stage 2
            'kelurahan'             => isset($post['kelurahan']) ? $post['kelurahan'] : NULL,
            'kecamatan'             => isset($post['kecamatan']) ? $post['kecamatan'] : NULL,
            'kode_pos'              => isset($post['kode_pos']) ? $post['kode_pos'] : NULL,
            'nama_pemilik'          => isset($post['nama_pemilik']) ? $post['nama_pemilik'] : NULL,
            'hobi'                  => isset($post['hobi']) ? $post['hobi'] : NULL,
            'bentuk_usaha'          => isset($post['bentuk_usaha']) ? $post['bentuk_usaha'] : NULL,
            'jumlah_karyawan'       => isset($post['jumlah_karyawan']) ? $post['jumlah_karyawan'] : NULL,
            'tahun_berdiri'         => isset($post['tahun_berdiri']) ? $post['tahun_berdiri'] : NULL,
            'barang_jual'           => isset($post['barang_jual']) ? $post['barang_jual'] : NULL,
            'sosial_media'          => isset($post['sosial_media']) ? $post['sosial_media'] : NULL,
            'status_tempat_usaha'   => isset($post['status_tempat_usaha']) ? $post['status_tempat_usaha'] : NULL,
            'jenis_pembayaran'      => isset($post['jenis_pembayaran']) ? $post['jenis_pembayaran'] : NULL,
            'omset'                 => isset($post['omset']) ? $post['omset'] : NULL,

            //Stage 3
            'jumlah_cabang'         => isset($post['jumlah_cabang']) ? $post['jumlah_cabang'] : NULL,
            'pernah_promosi'        => isset($post['pernah_promosi']) ? $post['pernah_promosi'] : NULL,
            'punya_pinjaman'        => isset($post['punya_pinjaman']) ? $post['punya_pinjaman'] : NULL,
            'on_going_project'      => isset($post['on_going_project']) ? $post['on_going_project'] : NULL,
            'punya_jumlah_plafond'  => isset($post['punya_jumlah_plafond']) ? $post['punya_jumlah_plafond'] : NULL,
            'punya_giro_cek'        => isset($post['punya_giro_cek']) ? $post['punya_giro_cek'] : NULL,
            'keterangan_tambahan'   => isset($post['keterangan_tambahan']) ? $post['keterangan_tambahan'] : NULL,
            'rekening_bank'         => isset($post['rekening_bank']) ? $post['rekening_bank'] : NULL,
            'cabang_bank'           => isset($post['cabang_bank']) ? $post['cabang_bank'] : NULL,
            'nama_bank'             => isset($post['nama_bank']) ? $post['nama_bank'] : NULL,
            'atas_nama'             => isset($post['atas_nama']) ? $post['atas_nama'] : NULL,
            'akhir_izin'            => isset($post['akhir_izin']) ? $post['akhir_izin'] : NULL,

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            'id_branch'             => $post['id_branch']
        ];

        //Memasukkan data mapping ke database `partners`
        $where = ['id_partner' => $post['id_partner']];

        $id = $this->partner_model->update($data, $where);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect('Partner');
    }
}
