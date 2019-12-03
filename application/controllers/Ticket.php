<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ticket_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = ['tickets.id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['tickets.id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->ticket_model->get($this->where)
        ];
        $this->template->load('template/index', 'tiket', $data);
    }

    public function update_status($id_ticket)
    {
        // $data = ['']
        $where = ['id_ticket' => $id_ticket];

        //Jika Head yang menekan tombol approve, maka tiket sudah disetujui oleh Head
        if ($this->fungsi->user_login()->level == 2) {
            $data = [
                'date_approved_by_head' => date('Y-m-d H:i:s'),
                'status' => 1
            ];
        }
        //Jika Manager yang menekan tombol approve, maka tiket sudah disetujui oleh Manager
        else if ($this->fungsi->user_login()->level == 3) {
            $data = [
                'date_approved_by_manager' => date('Y-m-d H:i:s'),
                'status' => 2
            ];
        }
        //Jika Admin HO yang menekan tombol approve, maka tiket sudah disetujui oleh Admin HO
        else if ($this->fungsi->user_login()->level == 4) {
            $data = [
                'date_completed' => date('Y-m-d H:i:s'),
                'status' => 5,
                'verified_by' => $this->fungsi->user_login()->id_user
            ];
        }
        $this->ticket_model->update($data, $where);

        $this->session->set_flashdata("berhasil_approve", "Data Tiket ID #$id_ticket berhasil diapprove.");
        redirect('Ticket');
    }

    public function update_ttd()
    {
        $post = $this->input->post(null, TRUE);
        $data = [
            'ttd_pks' => $post['ttd_pks']
        ];
        $where = ['id_ticket' => $post['id_ticket']];
        echo json_encode($this->ticket_model->update($data, $where));
    }
}
