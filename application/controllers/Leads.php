<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        // Load Modul Leads
        $this->load->model('leads_model');
        // Load Modul Leads Activity
        $this->load->model('leads_activity_model', 'leads_activity');
        // Load Modul Ticket
        $this->load->model('ticket_model');
        // Load Modul Branch
        $this->load->model('branch_model');
        // Load Modul Agent
        $this->load->model('agent_model');
        // Load Modul Partner
        $this->load->model('partner_model');
        // Load Modul User
        $this->load->model('user_model');
        // Load Modul Mapping Leads
        $this->load->model('mapping_leads_model', 'mapping_leads');
        // Load Modul Comment
        $this->load->model('comment_model');
        // Load Modul Leads Activity
        $this->load->model('leads_activity_model', 'leads_activity');
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
        $data = [
            'data' => $this->leads_model->get($this->where)
        ];

        $this->template->load('template/index', 'leads', $data);
    }

    public function create()
    {
        $data = [
            'mappings' => $this->mapping_leads->get($this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all(),

            'agents' => $this->agent_model->get($this->where),
            'partners' => $this->partner_model->get($this->where)
        ];
        $this->template->load('template/index', 'leads-form', $data);
    }

    public function edit($id)
    {

        $where = ['id_leads' => $id];
        $data = [
            'data' => $this->leads_model->get($where)->row(),
            'mappings' => $this->mapping_leads->get($this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all(),

            'agents' => $this->agent_model->get($this->where),
            'partners' => $this->partner_model->get($this->where),

            'activities' => $this->leads_activity->get($where),
            'comments' => $this->comment_model->get($where),
            'ticket' => $this->ticket_model->get($where)->row()
        ];

        $this->template->load('template/index', 'leads-edit', $data);
    }

    public function detail($id)
    {
        $where = ['id_leads' => $id];

        $data = [
            'data' => $this->leads_model->get($where)->row(),
            'mapping' => $this->mapping_leads->get($this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all(),
            'comments' => $this->comment_model->get($where)
        ];
        $this->template->load('template/index', 'leads-detail', $data);
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('id_mapping_leads', 'ID Mapping Leads', 'required', ['required' => 'Mohon pilih data dari Mapping Leads']);

        // if ($this->form_validation->run() != FALSE) {
        $data_mapping_leads = [
            'nama_konsumen'         => $post['nama_konsumen'],
            'telepon'               => $post['telepon'],
            'soa'                   => $post['soa'],
            'produk'                => $post['produk'],
            'detail_produk'         => $post['detail_produk'],
            'nama_event'            => $post['nama_event'],

            'updated_at'            => date('Y-m-d H:i:s'),

            'id_partner'            => !empty($post['id_partner']) ? $post['id_partner'] : NULL,
            'id_agent'              => !empty($post['id_agent']) ? $post['id_agent'] : NULL,
            'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL
        ];

        $where_mapping_leads = ['id_mapping_leads' => $post['id_mapping_leads']];

        $this->mapping_leads->update($data_mapping_leads, $where_mapping_leads);
        $data = [
            'id_mapping_leads' => $post['id_mapping_leads'],

            'follow_up_by'      => !empty($post['follow_up_by']) ? $post['follow_up_by'] : NULL,
            'no_ktp'            => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
            'leads_id'          => !empty($post['leads_id']) ? $post['leads_id'] : NULL,
            'cross_branch'      => !empty($post['cross_branch']) ? $post['cross_branch'] : NULL,
            'cabang_cross'      => !empty($post['cabang_cross']) ? $post['cabang_cross'] : NULL,
            'surveyor'          => !empty($post['surveyor']) ? $post['surveyor'] : NULL,
            'pic_ttd'           => !empty($post['pic_ttd']) ? $post['pic_ttd'] : NULL,
            'appeal_nst'        => !empty($post['appeal_nst']) ? $post['appeal_nst'] : NULL,
            'nilai_funding'         => !empty($post['nilai_funding']) ? $post['nilai_funding'] : NULL,

            //Timestamp
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'           => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'         => $post['id_branch']
        ];

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';
        }

        //Konfigurasi Upload
        $config['upload_path']         = './uploads/partners';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ktp')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['ktp'] = $this->upload->data('file_name');
        }


        if (!$this->upload->do_upload('selfie_foto')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['selfie_foto'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('foto_penyedia_jasa')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['foto_penyedia_jasa'] = $this->upload->data('file_name');
        }

        //Memasukkan data mapping ke database `leads`
        $id = $this->leads_model->create($data);

        //Membuat history activity inputan data leads
        $leads_activity = [
            'activity' => 'Data leads telah dibuat',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_leads' => $id,
            'id_user' => $this->fungsi->user_login()->id_user
        ];

        $this->leads_activity->create($leads_activity);

        //Menambah antrian tiket untuk data leads
        if (isset($post['process'])) {
            $ticket = [
                'status'        => 0,
                'date_pending'  => date('Y-m-d H:i:s'),
                'id_leads'       => $id,
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $this->ticket_model->create($ticket);

            //Notifikasi
            // $notification = [
            //     'pengirim' => $this->fungsi->user_login()->id_user,
            //     'type'      => 'new data',
            //     'id_leads'  => $id,
            //     'created_at' => date('Y-m-d H:i:s')
            // ];
            // $this->notification_model->create($notification);
        }
        if ($id) {
            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Leads');
        }
        // } else {
        //     $data = [
        //         'mapping' => $this->mapping_leads->get($this->where),
        //         'branches' => $this->branch_model->get(),
        //         'users' => $this->user_model->get_all()
        //     ];
        //     $this->template->load('template/index', 'leads-form', $data);
        // }
    }
    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $mapping_leads = [
            'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
            'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
            'soa'                   => !empty($post['soa']) ? $post['soa'] : NULL,
            'produk'                => !empty($post['produk']) ? $post['produk'] : NULL,
            'detail_produk'         => !empty($post['detail_produk']) ? $post['detail_produk'] : NULL,

            //Timestamp
            // 'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'               => $this->fungsi->user_login()->id_user,
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

        $where_mapping = ['id_mapping_leads' => $post['id_mapping_leads']];

        $this->mapping_leads->update($mapping_leads, $where_mapping);


        $data = [
            'id_mapping_leads' => $post['id_mapping_leads'],

            'follow_up_by'      => !empty($post['follow_up_by']) ? $post['follow_up_by'] : NULL,
            'no_ktp'            => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
            'leads_id'          => !empty($post['leads_id']) ? $post['leads_id'] : NULL,
            'cross_branch'      => !empty($post['cross_branch']) ? $post['cross_branch'] : NULL,
            'cabang_cross'      => !empty($post['cabang_cross']) ? $post['cabang_cross'] : NULL,
            'surveyor'          => !empty($post['surveyor']) ? $post['surveyor'] : NULL,
            'pic_ttd'           => !empty($post['pic_ttd']) ? $post['pic_ttd'] : NULL,
            'appeal_nst'        => !empty($post['appeal_nst']) ? $post['appeal_nst'] : NULL,
            'nilai_funding'     => !empty($post['nilai_funding']) ? $post['nilai_funding'] : NULL,

            //Timestamp
            // 'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'           => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'         => $post['id_branch']
        ];
        $where = ['id_leads' => $post['id_leads']];
        $this->leads_model->update($data, $where);

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';

            $ticket = [
                'status'        => 0,
                'date_pending'  => date('Y-m-d H:i:s'),
                'id_leads'      => $post['id_leads'],
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $this->ticket_model->create($ticket);
        }

        $where = ['id_leads' => $post['id_leads']];
        //Memasukkan data mapping ke database `leads`
        $this->leads_model->update($data, $where);

        //Membuat history activity inputan data leads
        $leads_activity = [
            'activity' => 'Perubahan pada data leads',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_leads' => $post['id_leads'],
            'id_user' => $this->fungsi->user_login()->id_user
        ];

        $this->leads_activity->create($leads_activity);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect('Leads');
    }

    public function update_detail()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            'id_branch'             => $post['id_branch']
        ];

        $where = ['id_lead' => $post['id_lead']];
        //Memasukkan data mapping ke database `leads`
        $id = $this->leads_model->update($data, $where);

        //Membuat history activity inputan data leads
        $leads_activity = [
            'activity' => 'Perubahan pada data leads',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_leads' => $post['id_leads'],
            'id_user' => $this->fungsi->user_login()->id_user
        ];

        $this->leads_activity->create($leads_activity);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect('Leads');
    }
}
