<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_support extends CI_Controller
{


    public function index()
    {
        $this->template->load('template/index', 'product_support');
    }
}
