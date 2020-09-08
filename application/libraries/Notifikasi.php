<?php

// require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Notifikasi
{


    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function send($id_ticket, $message, $penerima_cabang = NULL, $penerima = NULL)
    {
        $notification = [
            'pengirim'          => $this->ci->fungsi->user_login()->id_user,
            'penerima_cabang'   => $penerima_cabang != NULL ? $penerima_cabang : NULL,
            'penerima'          => $penerima != NULL ? $penerima : NULL,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $this->ci->notification_model->create($notification);
    }

    function real_time($id_ticket, $message, $penerima_cabang = NULL, $penerima = NULL)
    {

        $serviceAccount = base_url('assets/firebase/partnership-49790-firebase-adminsdk-h3xvx-e51012dda1.json');
        $firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri('https://partnership-49790.firebaseio.com/');
        $database = $firebase->createDatabase();
        $postData = [
            'pengirim'          => $this->ci->fungsi->user_login()->id_user,
            'penerima_cabang'   => $penerima_cabang != NULL ? $penerima_cabang : NULL,
            'penerima'          => $penerima != NULL ? $penerima : NULL,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];
        $postRef = $database->getReference('/notifications')->push($postData);
    }

    function cross_branch($id_ticket, $message, $penerima_cabang = NULL, $penerima = NULL)
    {
        $notification = [
            'pengirim'          => $this->ci->fungsi->user_login()->id_user,
            'penerima_cabang'   => $penerima_cabang == NULL ? NULL : $penerima_cabang,
            'penerima'          => $penerima == NULL ? NULL :  $penerima,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $this->ci->notification_model->create($notification);
    }
}
