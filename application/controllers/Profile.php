<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->user_model->get($this->fungsi->user_login()->nik)->row()
        ];
        $this->template->load('template/index', 'profile', $data);
    }

    public function update()
    {
        $post = $this->input->post(null, TRUE);
        $data = [
            'email' => $post['email']
            // 'cabang' => $post['cabang'],
        ];
        //Konfigurasi Upload
        $config['upload_path']         = './uploads/foto_profil';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            echo $this->upload->display_errors();
        } else {
            echo $this->upload->data('file_name');
        }

        $where = ['id_user' => $this->fungsi->user_login()->id_user];
        $this->user_model->update($data, $where);
    }
}
