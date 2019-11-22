<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner_model');
        $this->load->model('maintain_model');

        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }


    //Get All data maintain partner
    public function index()
    {
        $data = [
            'data' => $this->partner_model->get()
        ];

        $this->template->load('template/index', 'partner', $data);
    }

    public function maintain()
    {
        $this->template->load('template/index', 'maintain');
    }

    public function save_maintain()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'date_maintain' => date('Y-m-d H:i:s'),
            'catatan' => $post['catatan'],

            //Timestamp
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //ID partner yang maintain
            'id_maintain' => $post['id_maintain']
        ];

        //Konfigurasi Upload
        $config['upload_path']         = './uploads/maintains';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('upload_file')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['photo_activity'] = $this->upload->data('file_name');
        }

        $this->maintain_model->create($data);

        redirect('Mapping');
    }
}
