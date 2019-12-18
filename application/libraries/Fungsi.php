<?php

class Fungsi
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_model');
        $id_user = $this->ci->session->userdata('nik');
        $user_data = $this->ci->user_model->get($id_user)->row();
        return $user_data;
    }

    function notification()
    {
        $this->ci->load->model('notification_model');
        $level = $this->ci->session->userdata('level');
        $id_user = $this->ci->session->userdata('id_user');
        $id_branch = $this->ci->session->userdata('id_branch');
        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($level == 1) {
            $where = ("user_penerima.id_user = $id_user AND has_read = 1");
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($level == 2 || $level == 3) {
            $where = ("cabang_penerima.id_branch = $id_branch AND has_read = 1");
        } else {
            $where = NULL;
        }
        $user_data = $this->ci->notification_model->get($where);
        return $user_data;
        echo $this->user_login()->level;
    }
}
