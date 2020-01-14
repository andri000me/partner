<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transfer_data extends CI_Controller
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
        $this->load->helper('fungsi');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),
            'branches' => $this->branch_model->get()
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

    public function update_data($transfer = NULL)
    {
        $post = $this->input->post(NULL, TRUE);

        $where_data = ['id_agent' => $post['data']];
        $data = ['id_user' => $post['penginput']];
        if ($transfer == 'agent') {
            $id = $this->agent_model->update($data, $where_data);
        }
        if ($transfer == 'mapping_leads') {
            $id = $this->mapping_leads_model->update($data, $where_data);
        }
        if ($transfer == 'mapping_partner') {
            $id = $this->mapping_partner_model->update($data, $where_data);
        }
        // $this->mapping_leads->update($data, $where);
        // $this->mapping_partner->update($data, $where);


        echo json_encode($id);
        // redirect('branch');
    }
}
