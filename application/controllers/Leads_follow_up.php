<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads_follow_up extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        check_not_login();
    }

    //Save Follow Up
    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'follow_up_by' => $post['follow_up_by'],
            'date_follow_up' => date('Y-m-d H:i:s'),
            'catatan' => $post['catatan'],

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),

            //ID User yang mencatat leads follow up
            'id_user' => $this->fungsi->user_login()->id_user,

            //ID Leads yang di follow-up
            'id_leads' => $post['id_leads']
        ];


        $this->leads_follow_up_model->create($data);

        $this->session->set_flashdata("berhasil_simpan", "Data Leads Follow up berhasil disimpan. <a href='#'>Lihat Data</a>");

        redirect($post['redirect']);
    }
}