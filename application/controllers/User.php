<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        //Load Modul Branch
        $this->load->model('branch_model');

        //Load Modul User
        $this->load->model('user_model');

        $this->load->library('form_validation');
        $this->load->helper('fungsi');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'users' => $this->user_model->get_all(),
            'branches' => $this->branch_model->get()
        ];

        $this->template->load('template/index', 'user', $data);
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nik'       => $post['nik'],
            'name'      => $post['name'],
            'email'     => $post['email'],
            'level'     => $post['jabatan'],
            'jabatan'   => $post['jabatan'] == '1' ? 'CMS' : ($post['jabatan'] == '2' ? 'Sharia Head' : ($post['jabatan'] == '3' ? 'Sharia Manager' : ($post['jabatan'] == '4' ? 'Administrator' : ''))),
            'cabang'    => $post['cabang'],
            'is_active' => $post['is_active'],
        ];
        $where = ['id_user' => $post['id_user']];

        $this->user_model->update($data, $where);

        redirect('user');
        // $this->template->load('template/index', 'transfer-proses', $data);
    }
}
