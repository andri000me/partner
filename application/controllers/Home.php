<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
        $data = [
            'data' => $this->home_model->get('partners')
        ];
        $this->template->load('template/index', 'mapping', $data);
    }

    public function mapping()
    {
        $this->template->load('template/index', 'form');
    }

    public function draft()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama_usaha'            => $post['nama_usaha'],
            'bidang_usaha'          => $post['bidang_usaha'],
            'alamat'                => $post['alamat'],
            'telepon'               => $post['telepon'],
            'email'                 => $post['email']
            // 'bentuk_usaha'          => $post['bentuk_usaha'],
            // 'jumlah_karyawan'       => $post['jumlah_karyawan'],
            // 'tahun_berdiri'         => $post['tahun_berdiri'],
            // 'barang_jual'           => $post['barang_jual'],
            // 'sosial_media'          => $post['sosial_media'],
            // 'status_tempat_usaha'   => $post['status_tempat_usaha'],
            // 'jenis_pembayaran'      => $post['jenis_pembayaran'],
            // 'omset'                 => $post['omset'],
            // 'jumlah_cabang'         => $post['jumlah_cabang'],
            // 'promosi'               => $post['promosi'],
            // 'hobi'                  => $post['hobi'],
            // 'punya_pinjaman'        => $post['punya_pinjaman']
        ];

        $id = $this->home_model->create('partners', $data);
        $this->session->set_flashdata("berhasil_simpan", "Data berhasil disimpan. <a href='#'>Lihat Data</a>");
        redirect('Home');
    }
}
