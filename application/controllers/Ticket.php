<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ticket_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        check_not_login();
    }

    public function index()
    {
        $data = [
            'ticket' => $this->ticket_model->get();
        ];
        $this->template->load('template/index', 'ticket');
    }
}
