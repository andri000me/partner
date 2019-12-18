<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintain_partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('leads_follow_up_model');
        // $this->load->model('partner_activity_model', 'partner_activity');
        $this->load->model('mapping_leads_model');
        $this->load->model('ticket_model');
        $this->load->model('comment_model');

        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }


    //Get All data maintain partner
    public function index()
    {
        $data = [
            'data' => $this->leads_follow_up_model->get()
        ];

        // $this->template->load('template/index', 'maintain_partner', $data);
    }

    public function create($id)
    {
        $where = ['mapping_leads.id_mapping_leads' => $id];

        $data = [
            'data'          => $this->mapping_leads_model->get($where)->row(),
            // 'follow_up'      => $this->leads_follow_up_model->get($where)
        ];

        $this->template->load('template/index', 'leads-follow-up', $data);
    }

    //Save Follow Up
    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'date_follow_up' => date('Y-m-d H:i:s'),
            'follow_up_by' => $post['follow_up_by'],
            'catatan' => $post['catatan'],

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),

            //ID Mapping Leads yang di follow-up
            'id_mapping_leads' => $post['id_mapping_leads']
        ];


        $this->leads_follow_up_model->create($data);

        $this->session->set_flashdata("berhasil_simpan", "Data Maintain Partner berhasil disimpan. <a href='#'>Lihat Data</a>");

        redirect('Partner');
    }
}
