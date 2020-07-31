<?php

class Tiket
{
    protected $ci;
    public $has_superior, $staging;
    public function __construct()
    {
        $this->ci = &get_instance();
        
        $this->has_superior = $this->ci->fungsi->user_login()->has_superior;
        $this->staging = $this->has_superior == 0 ? 2 : ($this->has_superior == 1 ? 0 : ($this->has_superior == 2 ? 0 : 2))
    }

    function tambah_tiket($aktivitas_cabang, $id, $merge = NULL)
    {
        $data = [
            'status'            => $this->staging,
            'date_pending'      => date('Y-m-d H:i:s'),
            'date_created'      => date('Y-m-d H:i:s'),
            'date_modified'     => date('Y-m-d H:i:s'),
            $aktivitas_cabang   => $id,
            'id_user'           => $this->ci->fungsi->user_login()->id_user,
            'id_branch'         => $this->ci->fungsi->user_login()->id_branch
        ];
        if ($merge != NULL) $data = array_merge($data, $merge);
        return $this->ci->ticket_model->create($data);
    }

    function update_tiket($id_ticket)
    {
        $data = [
            'status'        => $this->staging,
            'date_pending'  => date('Y-m-d H:i:s'),
            'date_modified'  => date('Y-m-d H:i:s')
        ];
        return $this->ci->ticket_model->update($data, ['id_ticket' => $id_ticket]);
    }
}
