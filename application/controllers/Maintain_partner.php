<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintain_partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        check_not_login();
    }


    //Get All data maintain partner
    public function index()
    {
        $data = [
            'data' => $this->partner_model->get()
        ];

        $this->template->load('template/index', 'maintain_partner', $data);
    }

    public function create($id)
    {
        $where = ['partners_full.id_partner' => $id];

        $data = [
            'data'          => $this->partner_model->get($where)->row(),
            'ticket'        => $this->ticket_model->get($where)->row(),
            'maintains'      => $this->maintain_partner_model->get($where),
            'activities'    => $this->partner_activity_model->get($where),
            'comments'      => $this->comment_model->get($where)
        ];

        $this->template->load('template/index', 'partner-maintain', $data);
    }

    //Save Maintain
    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'date_maintain' => date('Y-m-d H:i:s'),
            'jenis_kegiatan' => $post['jenis_kegiatan'],
            'catatan' => $post['catatan'],

            //Timestamp
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //ID partner yang maintain
            'id_partner' => $post['id_partner']
        ];

        //Konfigurasi Upload
        $config['upload_path']         = './uploads/maintains';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo_activity')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['photo_activity'] = $this->upload->data('file_name');
        }

        $this->maintain_partner_model->create($data);

        //Membuat history activity inputan data maintain partner
        $partner_activity_model = [
            'activity' => 'Partner telah dimaintain',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_partner' => $post['id_partner'],
            'id_user' => $post['id_user']
        ];

        $this->partner_activity_model->create($partner_activity_model);
        $this->session->set_flashdata("berhasil_simpan", "Data Maintain Partner berhasil disimpan. <a href='#'>Lihat Data</a>");

        redirect('Partner');
    }
}