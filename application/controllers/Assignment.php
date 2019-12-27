<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assignment extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();

        // Load Modul Leads
        $this->load->model('leads_model');
        // Load Modul Leads Database
        $this->load->model('mapping_leads_model', 'mapping_leads');
        //Load Modul NST
        $this->load->model('nst_model');


        $this->load->helper('fungsi');

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

    public function prospect()
    {
        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $where_leads = "id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangnya dan memunculkan data cross-branch.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $where_leads = "cabang_cross = " . $this->fungsi->user_login()->id_branch;
        } else {
            $where_leads = 'id_leads IS NOT NULL';
        }
        $data = [
            'data' => $this->leads_model->get($where_leads),
            // Menampilkan Data Leads belum funding
            'belum_funding' => $this->leads_model->get("sudah_funding = 'Belum' AND (" . $where_leads . ")"),
            // Menampilkan Data Leads sudah funding
            'sudah_funding' => $this->leads_model->get("sudah_funding = 'Sudah' AND (" . $where_leads . ")")
        ];

        $this->template->load('template/index', 'assignment-lead-prospect', $data);
    }

    public function leads()
    {
        $data = [
            'data' => $this->mapping_leads->get($this->where)
        ];

        $this->template->load('template/index', 'assignment-lead-database', $data);
    }

    public function nst()
    {
        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $where_nst = ['nst.id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $where_nst = ['nst.id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $where_nst = NULL;
        }
        $data = [
            'data' => $this->nst_model->get($where_nst)
        ];
        $this->template->load('template/index', 'assignment-nst', $data);
    }
}
