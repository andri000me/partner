<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{
    public $where;
    public $staging;

    public function __construct()
    {

        parent::__construct();

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "tickets.id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "tickets.id_branch =" . $this->fungsi->user_login()->id_branch;
        } else if ($this->fungsi->user_login()->level == 4) {
            $this->where = "tickets.status >= 2";
        } else if ($this->fungsi->user_login()->level == 5) {
            $this->where = "tickets.status >=  0";
        }

        $this->staging = $this->tiket->update_approval();

        check_not_login();
    }

    private function activity($id_ticket, $activity)
    {
        $data = $this->ticket_model->get("tickets.id_ticket = " . $id_ticket)->row();
        if ($data->agent_id != NULL) {
            $agent_activity_model = [
                'activity' => $activity,
                'date_activity' => date('Y-m-d H:i:s'),
                'id_agent' => $data->agent_id,
                'id_user' => $this->fungsi->user_login()->id_user
            ];

            $insert = $this->agent_activity_model->create($agent_activity_model);
        }
        if ($data->partner_id != NULL) {
            $partner_activity_model = [
                'activity' => $activity,
                'date_activity' => date('Y-m-d H:i:s'),
                'id_partner' => $data->partner_id,
                'id_user' => $this->fungsi->user_login()->id_user
            ];

            $insert = $this->partner_activity_model->create($partner_activity_model);
        }
        if ($data->lead_id != NULL) {
            $leads_activity_model = [
                'activity' => $activity,
                'date_activity' => date('Y-m-d H:i:s'),
                'id_leads' => $data->lead_id,
                'id_user' => $this->fungsi->user_login()->id_user
            ];

            $insert = $this->leads_activity_model->create($leads_activity_model);
        }
        return $insert;
    }

    public function index()
    {
        $finished = $this->where . " AND tickets.status = 5";
        $unfinished = $this->where . " AND tickets.status < 5";
        $data = [
            'data' => $this->ticket_model->get($this->where . " AND DATE_FORMAT(date_modified, '%Y-%m-%d') BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()"),
            'finished' => $this->ticket_model->get($finished . " AND DATE_FORMAT(date_modified, '%Y-%m-%d') BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()"),
            'unfinished' => $this->ticket_model->get($unfinished . " AND DATE_FORMAT(date_modified, '%Y-%m-%d') BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()")
        ];
        $this->template->load('template/index', 'tiket', $data);
    }

    public function approve_status($id_ticket, $redirect = 'ticket')
    {
        // $data = ['']
        $where = ['id_ticket' => $id_ticket];

        //Jika Head yang menekan tombol approve, maka tiket sudah disetujui oleh Head
        if ($this->fungsi->user_login()->level == 2) {
            $data = [
                'date_approved_by_head' => date('Y-m-d H:i:s'),
                'status' => $this->staging
            ];

            $this->notifikasi->send($id_ticket, 'Disetujui oleh Head');
            $this->activity($id_ticket, 'Disetujui oleh Head');
        }
        //Jika Manager yang menekan tombol approve, maka tiket sudah disetujui oleh Manager
        else if ($this->fungsi->user_login()->level == 3) {
            $data = [
                'date_approved_by_manager' => date('Y-m-d H:i:s'),
                'status' => $this->staging
            ];
            $this->notifikasi->send($id_ticket, 'Disetujui oleh Manager');
            $this->activity($id_ticket, 'Disetujui oleh Manager');
        }
        //Jika Admin HO yang menekan tombol approve, maka tiket sudah disetujui oleh Admin HO
        else if ($this->fungsi->user_login()->level == 4) {
            $data = [
                'date_completed'    => date('Y-m-d H:i:s'),
                'status'            => $this->staging,
                'completed_by'      => $this->fungsi->user_login()->id_user
            ];
            $this->notifikasi->send($id_ticket, 'Disetujui oleh Admin HO');
            $this->activity($id_ticket, 'Disetujui oleh Admin HO');
        }
        //Jika Head HO yang menekan tombol approve, maka tiket sudah diaktivasi oleh Head HO
        else if ($this->fungsi->user_login()->level == 5) {
            $data = [
                'date_activated'    => date('Y-m-d H:i:s'),
                'status'            => $this->staging,
                'activated_by'      => $this->fungsi->user_login()->id_user
            ];
            $this->notifikasi->send($id_ticket, 'Diaktivasi oleh Head HO');
            $this->activity($id_ticket, 'Diaktivasi oleh Head HO');
        }
        $this->ticket_model->update($data, $where);

        $this->session->set_flashdata("berhasil_approve", "Data Tiket ID #$id_ticket berhasil diapprove.");
        redirect($redirect);
    }

    public function reject_status($id_ticket, $redirect = 'ticket')
    {
        //Jika Admin HO yang menekan tombol approve, maka tiket sudah disetujui oleh Admin HO
        $data = [
            'date_rejected'    => date('Y-m-d H:i:s'),
            'status'            => 4
        ];
        // if ($this->fungsi->user_login()->level == 4 || $this->fungsi->user_login()->level == 5) {
        $this->notifikasi->send($id_ticket, 'Ditolak oleh');
        $this->activity($id_ticket, 'Ditolak oleh');
        // }

        $where = ['id_ticket' => $id_ticket];
        $this->ticket_model->update($data, $where);

        $this->session->set_flashdata("berhasil_approve", "Data Tiket ID #$id_ticket berhasil di-reject.");
        redirect($redirect);
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

        $this->notifikasi->send($this->input->post('id_ticket'), 'Ditanda tangan oleh');
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

            //Jika data tiket sudah diapprove namun belum di upload form pks, maka ketika user upload form mou, tiket kembali ke status `pending`
            $id_ticket = $this->ticket_model->get(['id_ticket' => $this->input->post('id_ticket')])->row();
            // echo $id_ticket->status_ticket;
            if ($id_ticket->status_ticket == 5 || $id_ticket->status_ticket == 6) {
                $data_ticket = ['status' => 2];
                $this->ticket_model->update($data_ticket, ['id_ticket' => $this->input->post('id_ticket')]);
            }

            redirect($this->input->post('redirect'));
        }
    }

    public function update_approval()
    {
        echo $this->tiket->update_approval();
    }
}
