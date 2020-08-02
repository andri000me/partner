<?php

class Tiket
{
    protected $ci;
    public $has_superior, $staging;
    public function __construct()
    {
        $this->ci = &get_instance();

        $this->has_superior = $this->ci->fungsi->user_login()->has_superior;
        if ($this->ci->fungsi->user_login()->level == 1) {
            //Jika cabang tidak memiliki head & manager, maka status set ke 'pending ho'
            if ($this->has_superior == 0) {
                $this->staging = 2;
            }
            //Jika cabang memiliki head & tidak memiliki manager, maka status set ke 'menunggu persetujuan head'
            else if ($this->has_superior == 1) {
                $this->staging = 0;
            }
            //Jika cabang memiliki head & manager, maka status set ke 'menunggu persetujuan head'
            else if ($this->has_superior == 2) {
                $this->staging = 0;
            } else {
                $this->staging = 2;
            }
        } else if ($this->ci->fungsi->user_login()->level == 2) {
            //Jika cabang tidak memiliki head & manager, maka status set ke 'pending ho'
            if ($this->has_superior == 0) {
                $this->staging = 2;
            }
            //Jika cabang memiliki head & tidak memiliki manager, maka status set ke 'pending ho'
            else if ($this->has_superior == 1) {
                $this->staging = 2;
            }
            //Jika cabang memiliki head & manager, maka status set ke 'menunggu persetujuan manager'
            else if ($this->has_superior == 2) {
                $this->staging = 1;
            } else {
                $this->staging = 2;
            }
        } else if ($this->ci->fungsi->user_login()->level == 3) {
            //Jika cabang tidak memiliki head & manager, maka status set ke 'pending ho'
            if ($this->has_superior == 0) {
                $this->staging = 2;
            }
            //Jika cabang memiliki head & tidak memiliki manager, maka status set ke 'pending ho'
            else if ($this->has_superior == 1) {
                $this->staging = 2;
            }
            //Jika cabang memiliki head & manager, maka status set ke 'menunggu persetujuan manager'
            else if ($this->has_superior == 2) {
                $this->staging = 2;
            } else {
                $this->staging = 2;
            }
        } else if ($this->ci->fungsi->user_login()->level == 4 || $this->ci->fungsi->user_login()->level == 5) {
            $this->staging = 5;
        } else {
            $this->staging = 2;
        }
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
