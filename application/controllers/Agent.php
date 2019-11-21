<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('agent_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->partner_model->get()
        ];

        $this->template->load('template/index', 'agent', $data);
    }

    public function edit($id)
    {

        $where = ['id_agent' => $id];
        $data = [
            'data' => $this->partner_model->get($where)
        ];

        $this->template->load('template/index', 'agent_form_edit', $data);
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama'                      => $post['nama'],
            'jenis_kelamin'             => $post['jenis_kelamin'],
            'email'                     => $post['email'],
            'tanggal_lahir'             => $post['tanggal_lahir'],
            'no_ktp'                    => $post['no_ktp'],
            'no_npwp'                   => $post['no_npwp'],
            'pekerjaan'                 => $post['pekerjaan'],
            'jenis_pekerjaan'           => $post['jenis_pekerjaan'],
            'jenis_agent'               => $post['jenis_agent'],
            'status_kepemilikan_rumah'  => $post['status_kepemilikan_rumah'],
            'punya_pinjaman'            => $post['punya_pinjaman'],
            'afiliasi'                  => $post['afiliasi'],
            'agent_konvensional'        => $post['agent_konvensional'],
            'hubungan_karyawan_bfi'     => $post['hubungan_karyawan_bfi'],
            'konsumen_bfi'              => $post['konsumen_bfi'],
            'income'                    => $post['income'],
            'rekening_bank'             => $post['rekening_bank'],
            'cabang_bank'               => $post['cabang_bank'],
            'nama_bank'                 => $post['nama_bank'],
            'atas_nama'                 => $post['atas_nama'],

            //Timestamp
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            'id_branch'             => $post['id_branch']
        ];

        //Memasukkan data mapping ke database `Agents`

        $id = $this->agent_model->create($data);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data Agent berhasil disimpan. <a href='#'>Lihat Data</a>");

        redirect('Agent');
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama'                      => $post['nama'],
            'jenis_kelamin'             => $post['jenis_kelamin'],
            'email'                     => $post['email'],
            'tanggal_lahir'             => $post['tanggal_lahir'],
            'no_ktp'                    => $post['no_ktp'],
            'no_npwp'                   => $post['no_npwp'],
            'pekerjaan'                 => $post['pekerjaan'],
            'jenis_pekerjaan'           => $post['jenis_pekerjaan'],
            'jenis_agent'               => $post['jenis_agent'],
            'status_kepemilikan_rumah'  => $post['status_kepemilikan_rumah'],
            'punya_pinjaman'            => $post['punya_pinjaman'],
            'afiliasi'                  => $post['afiliasi'],
            'agent_konvensional'        => $post['agent_konvensional'],
            'hubungan_karyawan_bfi'     => $post['hubungan_karyawan_bfi'],
            'konsumen_bfi'              => $post['konsumen_bfi'],
            'income'                    => $post['income'],
            'rekening_bank'             => $post['rekening_bank'],
            'cabang_bank'               => $post['cabang_bank'],
            'nama_bank'                 => $post['nama_bank'],
            'atas_nama'                 => $post['atas_nama'],

            //Timestamp
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            'id_branch'             => $post['id_branch']
        ];

        $where = ['id_agent' => $post['id_agent']];
        //Memasukkan data mapping ke database `Agents`
        $id = $this->agent_model->update($data, $where);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data Agent berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect('Agent');
    }
}
