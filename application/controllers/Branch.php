<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branch extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        //Load Modul Branch
        $this->load->model('branch_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->branch_model->get()
        ];

        $this->template->load('template/index', 'branch', $data);
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $id_branch = $post['has_superior'];

        foreach ($id_branch as $branches => $val) {
            $this->branch_model->update(['has_superior' => $val], ['id_branch' => $branches]);

            // echo 'id branch: ' . $branches . ' has superior: ' . $val . '<br>';
        }

        redirect('branch');
    }

    public function update_superior()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'has_superior' => $post['has_superior']
        ];

        $where = ['id_branch' => $post['id_branch']];
        $data = $this->branch_model->update($data, $where);
        echo json_encode($data);
    }
}
