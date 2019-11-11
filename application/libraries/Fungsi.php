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
        $this->ci->load->model('user_m');
        $userid = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($userid)->row();
        return $user_data;
    }

    function comments($id_user = NULL)
    {
        $this->ci->load->model('data_m');
        // $userid = $this->ci->session->userdata('userid');
        if ($this->ci->session->userdata('level') == 1 || $this->ci->session->userdata('level') == 6) {
            $user_data = $this->ci->data_m->get_comment($id_user);
        } else {
            $user_data = $this->ci->data_m->get_comment();
        }
        return $user_data;
    }
}
