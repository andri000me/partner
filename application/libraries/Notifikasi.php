<?php

class Notifikasi
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function send($id_ticket, $message, $penerima = FALSE, $penerima_cabang = FALSE)
    {
        $notification = [
            'pengirim'          => $this->ci->fungsi->user_login()->id_user,
            'penerima'          => $penerima == FALSE ? NULL :  $this->ci->ticket_model->get(['id_ticket' => $id_ticket])->row()->user_id,
            'penerima_cabang'   => $penerima_cabang == FALSE ? NULL : $this->ci->ticket_model->get(['id_ticket' => $id_ticket])->row()->branch_id,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $this->ci->notification_model->create($notification);
    }
}
