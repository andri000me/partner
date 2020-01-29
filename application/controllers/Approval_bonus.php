<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approval_bonus extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();

        //Load Modul Approval Bonus
        $this->load->model('approval_bonus_model', 'approval_bonus');

        // Load Modul Leads
        $this->load->model('leads_model');
        // Load Modul Leads Assignment
        $this->load->model('leads_assignment_model', 'leads_assignment');
        //Load Modul NST
        $this->load->model('nst_model');


        $this->load->helper('fungsi');

        $this->load->library('form_validation');


        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = ['id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }

    public function index()
    {
        // $data = [
        //     'data' => $this->approval_bonus->get($this->where)
        // ];
        // $this->template->load('template/index', 'approval-bonus', $data);
        $this->template->load('template/index', 'approval-bonus');
    }

    public function create()
    {
        $get_leads =
            "SELECT *, 
        leads.leads_id as leads_id_leads,
        mapping_leads.nama_konsumen as nama_konsumen_leads,
        mapping_leads.id_branch as id_branch_leads,
        mapping_leads.produk as produk_leads,
        mapping_leads.id_user as id_user_leads,
        mapping_leads.nama_konsumen as nama_konsumen_leads,
        leads.created_at as created_at_leads
        FROM leads
        INNER JOIN mapping_leads ON mapping_leads.id_mapping_leads = leads.id_mapping_leads 
        INNER JOIN users ON users.id_user = mapping_leads.id_user 
        INNER JOIN branches ON branches.id_branch = mapping_leads.id_branch
        LEFT JOIN approval_bonuses ON approval_bonuses.leads_id = leads.leads_id
        WHERE users.id_user = " . $this->fungsi->user_login()->id_user . "
        AND approval_bonuses.leads_id IS NULL
        AND branches.id_branch = " . $this->fungsi->user_login()->id_branch;

        $data = [
            'leads' => $this->leads_model->query($get_leads)
        ];

        $this->template->load('template/index', 'approval-bonus-form', $data);
    }

    public function edit($id)
    {
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $this->form_validation->set_rules('leads_id', 'Leads ID', 'required|is_unique[approval_bonuses.leads_id]', ['is_unique' => 'Leads ID sudah terdaftar, mohon ganti Leads ID']);

        if ($this->form_validation->run() != FALSE) {

            $data = [
                'leads_id' => $post['leads_id'],
                'requester' => $post['requester'],
                'cabang' => $post['cabang'],
                'nama_konsumen' => $post['nama_konsumen'],
                'tanggal_dibuat' => $post['tanggal_dibuat'],
                'produk' => $post['produk'],
                'sumber_lead' => $post['sumber_lead'],
                'nama_pemberi_lead' => $post['nama_pemberi_lead'],
                'nomor_kontrak' => $post['nomor_kontrak'],
                'nomor_rekening' => $post['nomor_rekening'],
                'atas_nama' => $post['atas_nama'],
                'npwp' => $post['npwp'],
                'leads_id' => $post['leads_id'],
            ];

            //Konfigurasi Upload
            $config['upload_path']         = './uploads/approval_bonus';
            $config['allowed_types']        = '*';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('upload_file')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                $data['ktp'] = $this->upload->data('file_name');
            }

            $id = $this->approval_bonus->create($data);

            //Menambah antrian tiket untuk data Agent
            $has_superior = $this->fungsi->user_login()->has_superior;
            $ticket = [
                'status'                => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                'date_pending'          => date('Y-m-d H:i:s'),
                'date_created'          => date('Y-m-d H:i:s'),
                'date_modified'         => date('Y-m-d H:i:s'),
                'id_approval_bonus'     => $id,

                'id_user'               => $this->fungsi->user_login()->id_user,
                'id_branch'             => $this->fungsi->user_login()->id_branch
            ];
            $id_ticket = $this->ticket_model->create($ticket);
        } else {
            $get_leads =
                "SELECT *, 
        leads.leads_id as leads_id_leads,
        mapping_leads.nama_konsumen as nama_konsumen_leads,
        mapping_leads.id_branch as id_branch_leads,
        mapping_leads.produk as produk_leads,
        mapping_leads.id_user as id_user_leads,
        mapping_leads.nama_konsumen as nama_konsumen_leads,
        leads.created_at as created_at_leads
        FROM leads
        INNER JOIN mapping_leads ON mapping_leads.id_mapping_leads = leads.id_mapping_leads 
        INNER JOIN users ON users.id_user = mapping_leads.id_user 
        INNER JOIN branches ON branches.id_branch = mapping_leads.id_branch
        LEFT JOIN approval_bonuses ON approval_bonuses.leads_id = leads.leads_id
        WHERE users.id_user = " . $this->fungsi->user_login()->id_user . "
        AND approval_bonuses.leads_id IS NULL
        AND branches.id_branch = " . $this->fungsi->user_login()->id_branch;

            $data = [
                'leads' => $this->leads_model->query($get_leads)
            ];

            $this->template->load('template/index', 'approval-bonus-form', $data);
        }
    }

    public function update()
    {
    }
}
