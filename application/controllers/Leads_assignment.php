<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads_assignment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('leads_assignment_model', 'leads_assignment');
        $this->load->model('branch_model');

        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }


    public function index()
    {
        $data = [
            'data' => $this->leads_assignment->get()
        ];

        // $this->template->load('template/index', 'maintain_partner', $data);
    }

    //Form Create Leads Assignment
    public function create()
    {
        $data = [
            'branches' => $this->branch_model->get()
        ];
        $this->template->load('template/index', 'tele-admin-form', $data);
    }

    //Form Edit Leads Assignment
    public function edit($id)
    {
        $where = ['id_leads_assignment' => $id];
        $data = [
            'data' => $this->leads_assignment->get($where)->row(),
            'branches' => $this->branch_model->get()
        ];
        $this->template->load('template/index', 'tele-admin-edit', $data);
    }

    //Save Leads Assignment
    public function save()
    {
        $post = $this->input->post(NULL, TRUE);
        $this->form_validation->set_rules('telepon', 'Nomor Telepon', 'is_unique[leads_assignments.telepon]', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);

        if ($this->form_validation->run() != FALSE) {


            $data = [
                'nama'              => $post['nama'],
                'telepon'           => $post['telepon'],
                'kota'              => $post['kota'],
                'cabang'            => $post['cabang'],
                'produk'            => $post['produk'],
                'detail_produk'     => $post['detail_produk'],
                'nilai_pembiayaan'  => str_replace(",", "", $post['nilai_pembiayaan']),
                'assign_to'         => $post['assign_to'],
                'status'            => $post['status'],
                'catatan'           => $post['catatan'],

                //Timestamp
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

                //ID User yang mencatat leads follow up
                'id_user' => $this->fungsi->user_login()->id_user,
            ];


            $this->leads_assignment->create($data);

            $this->session->set_flashdata("berhasil_simpan", "Data Leads Assigment berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Assignment/leads');
        } else {
            $this->template->load('template/index', 'leads-assignment-form');
        }
    }

    //Update Leads Assignment
    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        // $original_value = $this->leads_assignment->get(['id_leads_assignment' => $post['id_leads_assignment']])->row();

        // $this->form_validation->set_rules('telepon', 'Nomor Telepon', ($post['telepon'] != $original_value->telepon) ? 'is_unique[leads_assignments.telepon]' : '', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);
        // if ($post['telepon'] == $original_value->telepon) {
        //     $unique_telepon = '|is_unique[leads_assignments.telepon]';
        // } else {
        //     $unique_telepon = '';
        // }
        // $this->form_validation->set_rules('telepon', 'Nomor Telepon', 'required' . $unique_telepon, ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);

        // echo $post['telepon'] . ' = ' . $original_value->telepon;
        // if ($this->form_validation->run() != FALSE) {
        $data = [
            'nama'              => $post['nama'],
            'telepon'           => $post['telepon'],
            'kota'              => $post['kota'],
            'cabang'            => $post['cabang'],
            'produk'            => $post['produk'],
            'detail_produk'     => $post['detail_produk'],
            'nilai_pembiayaan'  => str_replace(",", "", $post['nilai_pembiayaan']),
            'assign_to'         => $post['assign_to'],
            'status'            => $post['status'],
            'catatan'           => $post['catatan'],

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //ID User yang mencatat leads follow up
            // 'id_user' => $this->fungsi->user_login()->id_user,
        ];

        $where = ['id_leads_assignment' => $post['id_leads_assignment']];

        $this->leads_assignment->update($data, $where);

        $this->session->set_flashdata("berhasil_simpan", "Data Leads Assigment berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect($post['redirect']);
        // } else {
        //     // echo 'hasbdjbasdjbdas';
        //     $where = ['id_leads_assignment' => $post['id_leads_assignment']];
        //     $data = [
        //         'data' => $this->leads_assignment->get($where)->row(),
        //         'branches' => $this->branch_model->get()
        //     ];
        //     $this->template->load('template/index', 'tele-admin-edit', $data);
        // }
    }
}
