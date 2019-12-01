<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('comment_model');
        $this->load->model('ticket_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }


    public function save($type)
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'comment'   => $post['comment'],
            'date'      => date('Y-m-d H:i:s'),
            'id_user'   => $this->fungsi->user_login()->id_user,
            $type       => $post['id_type']
        ];

        $this->comment_model->create($data);

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
