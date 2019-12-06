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
        $id_user = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->notification_model->get(['user_penerima.id_user' => $id_user]);
        return $user_data;
    }
}
