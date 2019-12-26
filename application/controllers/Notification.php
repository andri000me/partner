<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        //Load Modul Branch
        $this->load->model('notification_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "user_penerima.id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "cabang_penerima.id_branch = " . $this->fungsi->user_login()->id_branch . " AND pengirim != " . $this->fungsi->user_login()->id_user;
        } else {
            $this->where = "id.notifcations IS NOT NULL AND pengirim != " . $this->fungsi->user_login()->id_user;
        }
    }

    public function index()
    {
        $data = [
            'today' => $this->notification_model->get("DATE_FORMAT(notifications.created_at, '%Y-%m-%d') = CURDATE() AND " . $this->where),
            'earlier' => $this->notification_model->get("DATE_FORMAT(notifications.created_at, '%Y-%m-%d') < CURDATE() AND " . $this->where)
        ];

        $this->template->load('template/index', 'notifikasi', $data);
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'has_read' => $post['has_read']
        ];

        $where = ['id_notification' => $post['id_notification']];
        $data = $this->notification_model->update($data, $where);
        echo json_encode($data);
    }
}
