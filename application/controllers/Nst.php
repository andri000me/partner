<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nst extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Modul Leads
        $this->load->model('leads_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = ['id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }

    public function index()
    {
        //

    }

    public function create()
    {
        $data = [
            'leads' => $this->leads_model->get($this->where)
        ];
        $this->template->load('template/index', 'nst', $data);
    }
}
