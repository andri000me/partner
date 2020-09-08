<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require __DIR__ . '/vendor/autoload.php';
require('vendor/autoload.php');

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Notification extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();

        check_not_login();

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "notifications.penerima = " . $this->fungsi->user_login()->id_user . " AND pengirim != " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "notifications.penerima_cabang = " . $this->fungsi->user_login()->id_branch . " AND pengirim != " . $this->fungsi->user_login()->id_user;
        } else if ($this->fungsi->user_login()->level >= 4) {
            // $this->where = "id_notification IS NULL";
            $this->where = "notifications.penerima_cabang = 46";
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

    // AJAX Controller
    public function mark_all()
    {
        $data = $this->notification_model->update(['has_read' => '1'], $this->where);
        echo json_encode($data);
    }



    public function real_time($id_ticket, $message, $penerima_cabang = NULL, $penerima = NULL)
    {

        $serviceAccount = 'assets/firebase/partnership-49790-firebase-adminsdk-h3xvx-e51012dda1.json';
        $firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri('https://partnership-49790.firebaseio.com/');
        $database = $firebase->createDatabase();
        $postData = [
            'pengirim'          => $this->fungsi->user_login()->id_user,
            'penerima_cabang'   => $penerima_cabang != NULL ? $penerima_cabang : NULL,
            'penerima'          => $penerima != NULL ? $penerima : NULL,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];
        $postRef = $database->getReference('/notifications')->push($postData);
    }
}
