<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('comment_model');
        $this->load->model('ticket_model');
        $this->load->model('notification_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'comment'   => $post['comment'],
            'date'      => date('Y-m-d H:i:s'),
            'id_user'   => $this->fungsi->user_login()->id_user,
            'id_ticket' => $post['ticket']
        ];

        $this->comment_model->create($data);

        //Notifikasi
        $notification = [
            'pengirim'      => $this->fungsi->user_login()->id_user,
            'penerima'          => $this->ticket_model->get(['id_ticket' => $post['ticket']])->row()->user_id,
            'penerima_cabang'   => $this->ticket_model->get(['id_ticket' => $post['ticket']])->row()->branch_id,
            'type'          => 'Komentar',
            'id_ticket'     => $post['ticket'],
            'created_at'    => date('Y-m-d H:i:s')
        ];
        $this->notification_model->create($notification);

        redirect($post['uri_string']);
    }

    public function delete($id_comment)
    {
        $post = $this->input->post(NULL, TRUE);

        $where = ['id_comment' => $id_comment];

        $this->comment_model->delete($where);

        redirect($post['uri_string']);
    }
}
