<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function index()
    {
        $data['prospect'] = $this->dashboard_model->query("SELECT * FROM leads_full WHERE MONTH(created_at) = MONTH(CURRENT_DATE())")->num_rows();
        $data['partners'] = $this->dashboard_model->query("SELECT * FROM partners_full WHERE MONTH(created_at) = MONTH(CURRENT_DATE())")->num_rows();
        $data['agents'] = $this->dashboard_model->query("SELECT * FROM agents WHERE MONTH(created_at) = MONTH(CURRENT_DATE())")->num_rows();
        $data['fs_konsumen'] = $this->fs_konsumen_model->get()->num_rows();

        //tiket
        $data['tiket_head_approval'] = $this->ticket_model->get("MONTH(tickets.date_modified) = MONTH(CURRENT_DATE()) AND tickets.status = 0")->num_rows();
        $data['tiket_manager_approval'] = $this->ticket_model->get("MONTH(tickets.date_modified) = MONTH(CURRENT_DATE()) AND tickets.status = 1")->num_rows();
        $data['tiket_pending'] = $this->ticket_model->get("MONTH(tickets.date_modified) = MONTH(CURRENT_DATE()) AND tickets.status = 2")->num_rows();
        $data['tiket_rejected'] = $this->ticket_model->get("MONTH(tickets.date_modified) = MONTH(CURRENT_DATE()) AND tickets.status = 4")->num_rows();
        $data['tiket_finished'] = $this->ticket_model->get("MONTH(tickets.date_modified) = MONTH(CURRENT_DATE()) AND tickets.status = 5")->num_rows();


        $data['repeat_order'] = $this->leads_model->get("soa = 'ro'")->num_rows();
        $data['cgc'] = $this->leads_model->get("soa = 'cgc'")->num_rows();
        $data['egc'] = $this->leads_model->get("soa = 'egc'")->num_rows();
        $data['sharia_head'] = $this->leads_model->get("soa = 'Sharia Head'")->num_rows();
        $this->template->load('template/index', 'dashboard', $data);
    }
}
