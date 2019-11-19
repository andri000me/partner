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
}
