<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nst extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Modul Leads
        $this->load->model('leads_model');
        //Load Modul NST
        $this->load->model('nst_model');
        //Load Modul Ticket
        $this->load->model('ticket_model');
        //Load Modul Notifikasi
        $this->load->model('notification_model');
        //Load Modul Agent Activity
        $this->load->model('agent_activity_model', 'agent_activity');
        //Load Modul Comment
        $this->load->model('comment_model');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = ['nst.id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['nst.id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->nst_model->get($this->where)
        ];
        $this->template->load('template/index', 'nst', $data);
    }

    public function create()
    {
        $get_leads = "SELECT *, leads.leads_id as lead_id FROM leads
        INNER JOIN mapping_leads ON mapping_leads.id_mapping_leads = leads.id_mapping_leads 
        INNER JOIN users ON users.id_user = mapping_leads.id_user 
        INNER JOIN branches ON branches.id_branch = mapping_leads.id_branch
        LEFT JOIN nst ON nst.leads_id = leads.leads_id
        WHERE users.id_user = " . $this->fungsi->user_login()->id_user . "
        AND nst.leads_id IS NULL
        AND branches.id_branch = " . $this->fungsi->user_login()->id_branch;

        $data = [
            'leads' => $this->nst_model->query($get_leads)
        ];
        $this->template->load('template/index', 'nst-form', $data);
    }

    public function edit($id)
    {
        $get_leads =
            "SELECT *, leads.leads_id as lead_id 
                FROM nst
                INNER JOIN leads ON leads.leads_id = nst.leads_id
                INNER JOIN mapping_leads ON mapping_leads.id_mapping_leads = leads.id_mapping_leads 
                INNER JOIN users ON users.id_user = mapping_leads.id_user 
                INNER JOIN branches ON branches.id_branch = mapping_leads.id_branch
                WHERE nst.id_nst = $id";

        $data = [
            'data' => $this->nst_model->query($get_leads)->row()
        ];
        $this->template->load('template/index', 'nst-edit', $data);
        // echo json_encode($this->nst_model->query($get_leads)->row());
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('leads_id', 'Leads ID', 'required|is_unique[nst.leads_id]', ['is_unique' => 'Leads ID sudah terdaftar, mohon ganti Leads ID']);
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'leads_id'      => $post['leads_id'],

                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];

            $id = $this->nst_model->create($data);

            //Menambah antrian tiket untuk data NST
            $has_superior = $this->fungsi->user_login()->has_superior;
            $ticket = [
                'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                'date_pending'  => date('Y-m-d H:i:s'),
                'date_created'  => date('Y-m-d H:i:s'),
                'date_modified'  => date('Y-m-d H:i:s'),
                'id_nst'      => $id,
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $id_ticket = $this->ticket_model->create($ticket);

            //Notifikasi
            $notification = [
                'pengirim'      => $this->fungsi->user_login()->id_user,
                'type'          => 'Data NST Baru',
                'id_ticket'     => $id_ticket,
                'created_at'    => date('Y-m-d H:i:s')
            ];
            $this->notification_model->create($notification);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data NST berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('nst');
        } else {
            $get_leads = "SELECT *, leads.leads_id as lead_id FROM leads
        INNER JOIN mapping_leads ON mapping_leads.id_mapping_leads = leads.id_mapping_leads 
        INNER JOIN users ON users.id_user = mapping_leads.id_user 
        INNER JOIN branches ON branches.id_branch = mapping_leads.id_branch
        LEFT JOIN nst ON nst.leads_id = leads.leads_id
        WHERE users.id_user = " . $this->fungsi->user_login()->id_user . "
        AND nst.leads_id IS NULL
        AND branches.id_branch = " . $this->fungsi->user_login()->id_branch;

            $data = [
                'leads' => $this->nst_model->query($get_leads)
            ];
            $this->template->load('template/index', 'nst-form', $data);
        }
    }

    public function update()
    {
        //
    }
}
