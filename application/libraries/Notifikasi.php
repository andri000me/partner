<?php

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
