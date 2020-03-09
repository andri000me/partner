<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{
    public $where;

    public function __construct()
    {

        parent::__construct();
        $this->load->model('ticket_model');
        $this->load->model('notification_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = ['tickets.id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['tickets.id_branch' => $this->fungsi->user_login()->id_branch];
        } else if ($this->fungsi->user_login()->level == 4) {
            $this->where = ['tickets.status >=' => 2];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }

    //Notification Method
    private function notification($id_ticket, $message)
    {
        $notification = [
            'pengirim'          => $this->fungsi->user_login()->id_user,
            'penerima'          => $this->ticket_model->get(['id_ticket' => $id_ticket])->row()->user_id,
            'penerima_cabang'   => $this->ticket_model->get(['id_ticket' => $id_ticket])->row()->branch_id,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $notification;
    }

    public function index()
    {

        $data = [
            'data' => $this->ticket_model->get($this->where)
        ];
        $this->template->load('template/index', 'tiket', $data);
    }

    public function approve_status($id_ticket)
    {
        // $data = ['']
        $where = ['id_ticket' => $id_ticket];

        //Jika Head yang menekan tombol approve, maka tiket sudah disetujui oleh Head
        if ($this->fungsi->user_login()->level == 2) {
            $data = [
                'date_approved_by_head' => date('Y-m-d H:i:s'),
                'status' => 2
            ];

            $notification = $this->notification($id_ticket, 'Disetujui oleh Head');
        }
        //Jika Manager yang menekan tombol approve, maka tiket sudah disetujui oleh Manager
        else if ($this->fungsi->user_login()->level == 3) {
            $data = [
                'date_approved_by_manager' => date('Y-m-d H:i:s'),
                'status' => 2
            ];
            $notification = $this->notification($id_ticket, 'Disetujui oleh Manager');
        }
        //Jika Admin HO yang menekan tombol approve, maka tiket sudah disetujui oleh Admin HO
        else if ($this->fungsi->user_login()->level == 4 || $this->fungsi->user_login()->level == 5) {
            $data = [
                'date_completed'    => date('Y-m-d H:i:s'),
                'status'            => 5,
                'completed_by'      => $this->fungsi->user_login()->id_user
            ];
            $notification = $this->notification($id_ticket, 'Disetujui oleh Admin HO');
        }
        $this->ticket_model->update($data, $where);

        $this->notification_model->create($notification);

        $this->session->set_flashdata("berhasil_approve", "Data Tiket ID #$id_ticket berhasil diapprove.");
        redirect('Ticket');
    }

    public function reject_status($id_ticket)
    {
        //Jika Admin HO yang menekan tombol approve, maka tiket sudah disetujui oleh Admin HO
        if ($this->fungsi->user_login()->level == 4 || $this->fungsi->user_login()->level == 5) {
            $data = [
                'date_rejected'    => date('Y-m-d H:i:s'),
                'status'            => 4
                // 'completed_by'      => $this->fungsi->user_login()->id_user
            ];
            $notification = $this->notification($id_ticket, 'Ditolak oleh');
        }
        $where = ['id_ticket' => $id_ticket];
        $this->ticket_model->update($data, $where);

        $this->notification_model->create($notification);

        $this->session->set_flashdata("berhasil_approve", "Data Tiket ID #$id_ticket berhasil di-reject.");
        redirect('Ticket');
    }

    public function update_ttd()
    {
        // $post = $this->input->post(null, TRUE);
        $data = [
            'ttd_pks'           => $this->input->post('ttd_pks')

            // 'date_verified_ttd' =>  date('Y-m-d H:i:s'),
            // 'verified_by'       => $this->fungsi->user_login()->id_user
        ];

        $where = ['id_ticket' => $this->input->post('id_ticket')];
        $data = $this->ticket_model->update($data, $where);

        echo json_encode($data);

        $notification = $this->notification($this->input->post('id_ticket'), 'Ditanda tangan oleh');
        $this->notification_model->create($notification);
    }

    //Upload Formulir MOU
    public function upload_mou($folder)
    {
        //Konfigurasi Upload
        $config['upload_path']         = './uploads/' . $folder;
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('upload_mou')) {
            echo $this->upload->display_errors();
        } else {
            $data = [
                'date_verified_ttd' =>  date('Y-m-d H:i:s'),
                'verified_by'       => $this->fungsi->user_login()->id_user
            ];
            $data['form_mou'] = $this->upload->data('file_name');
            $where = ['id_ticket' => $this->input->post('id_ticket')];
            $this->ticket_model->update($data, $where);

            redirect($this->input->post('redirect'));
        }
    }

    public function test()
    {
        $this->load->view('test');
    }
}
