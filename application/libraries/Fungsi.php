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
            $where = ("user_penerima.id_user = $id_user AND pengirim != $id_user AND has_read = 1");
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($level == 2 || $level == 3) {
            $where = ("cabang_penerima.id_branch = $id_branch AND pengirim != $id_user AND has_read = 1");
        } else if($level >= 4){
            $where = "notifications.penerima_cabang = 46 AND has_read = 1";
        }
        $user_data = $this->ci->notification_model->get($where);
        return $user_data;
    }

    function module()
    {
        $this->ci->load->model('module_model');

        $id_user = $this->ci->session->userdata('id_user');
        $module = $this->ci->module_model->get(['id_user' => $id_user])->row();
        return $module;
    }

    function check_duplicate($field, $value)
    {
        // if($id == NULL){
            $check = $this->partner_model->get("$field = '$value'");
            if($check->num_rows() == 0){
                echo 'available';
            } else {
                echo 'not available';
            } 
        // }
    } 
}
