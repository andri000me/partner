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

        //Load Modul User
        $this->load->model('user_model');

        // Load Modul Agent
        $this->load->model('agent_model');

        // Load Modul Mapping Leads
        $this->load->model('mapping_leads_model', 'mapping_leads');

        // Load Modul Mapping Partner
        $this->load->model('mapping_partner_model', 'mapping_partner');

        $this->load->library('form_validation');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch])
        ];

        $this->template->load('template/index', 'transfer-data', $data);
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);
        $data = ['id_user' => $post['transfer_to']];
        $where = ['id_user' => $post['id_user']];

        $this->agent_model->update($data, $where);
        $this->mapping_leads->update($data, $where);
        $this->mapping_partner->update($data, $where);


        // $this->ticket_model->update($data, $where);

        redirect('branch');
    }
}
