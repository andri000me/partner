<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner_model');
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

    public function mapping()
    {
        $this->template->load('template/index', 'form');
    }

    public function save_mapping()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required');
        $this->form_validation->set_rules('bidang_usaha', 'Bidang Usaha', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|is_unique[partners.telepon]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[partners.email]');
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'nama_usaha'            => $post['nama_usaha'],
                'bidang_usaha'          => $post['bidang_usaha'],
                'alamat'                => $post['alamat'],
                'telepon'               => $post['telepon'],
                'email'                 => $post['email'],
                'kategori_produk'       => $post['kategori_produk'],
                'catatan'               => $post['catatan'],

                //Timestamp
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $post['id_user'],
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $post['id_branch']
            ];

            //Memasukkan data mapping ke database `partners`
            $id = $this->partner_model->create($data);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Partner');
        } else {
            $this->template->load('template/index', 'form');
        }
    }
}