<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerjasama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner_model');
    }

    public function index()
    {

        $this->template->load('template/index', 'wizardform', $data);
    }
}
