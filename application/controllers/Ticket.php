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
            'data' => $this->ticket_model->get()
        ];
        $this->template->load('template/index', 'tiket', $data);
    }

    public function update($id_ticket)
    {
        // $data = ['']
        $where = ['id_ticket' => $id_ticket];

        //Jika Head yang menekan tombol approve, maka tiket sudah disetujui oleh Head
        if ($this->fungsi->user_login()->level == 2) {
            $this->ticket_model->update(['date_approved_by_head' => date('Y-m-d H:i:s'), 'status' => 1], $where);
        }
        //Jika Manager yang menekan tombol approve, maka tiket sudah disetujui oleh Manager
        else if ($this->fungsi->user_login()->level == 3) {
            $this->ticket_model->update(['date_approved_by_manager' => date('Y-m-d H:i:s'), 'status' => 2], $where);
        }
        //Jika Admin HO yang menekan tombol approve, maka tiket sudah disetujui oleh Admin HO
        else if ($this->fungsi->user_login()->level == 4) {
            $this->ticket_model->update(['date_completed' => date('Y-m-d H:i:s'), 'status' => 5], $where);
        }

        $this->session->set_flashdata("berhasil_approve", "Data Tiket ID #$id_ticket berhasil diapprove.");
        redirect('Ticket');
    }
}
