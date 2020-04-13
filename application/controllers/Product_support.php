<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_support extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('fungsi');
        //Load Modul Product Support
        $this->load->model('ps_ticket_model', 'ps_ticket');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = ['ps_tickets.id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['ps_tickets.id_branch' => $this->fungsi->user_login()->id_branch];
        } else if ($this->fungsi->user_login()->level == 4) {
            $this->where = ['ps_tickets.status >=' => 2];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }


    public function index()
    {
        $data = [
            'data' => $this->ps_ticket->get($this->where)
        ];
        $this->template->load('template/index', 'ps-tiket' , $data);
    }
    
    public function create()
    {
        $this->template->load('template/index', 'product_support/input-produk-form');
    }
}