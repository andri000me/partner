<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

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
            'pengirim'          => $this->fungsi->user_login()->id_user,
            'penerima'          => $this->ticket_model->get(['id_ticket' => $post['ticket']])->row()->user_id,
            'penerima_cabang'   => $this->ticket_model->get(['id_ticket' => $post['ticket']])->row()->branch_id,
            'type'              => 'Komentar oleh',
            'id_ticket'         => $post['ticket'],
            'created_at'        => date('Y-m-d H:i:s')
        ];
        $this->notification_model->create($notification);

        redirect($post['uri_string']);
    }

    // function untuk ticket product support
    public function save_ps()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'comment'       => $post['comment'],
            'date'          => date('Y-m-d H:i:s'),
            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_ps_ticket'  => $post['id_ps_ticket']
        ];

        $this->comment_model->create($data);

        //Notifikasi
        $notification = [
            'pengirim'          => $this->fungsi->user_login()->id_user,
            'penerima'          => $this->ps_ticket_model->get(['id_ps_ticket' => $post['id_ps_ticket']])->row()->user_id,
            'penerima_cabang'   => $this->ps_ticket_model->get(['id_ps_ticket' => $post['id_ps_ticket']])->row()->branch_id,
            'type'              => 'Komentar oleh',
            'id_ps_ticket'      => $post['id_ps_ticket'],
            'created_at'        => date('Y-m-d H:i:s')
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