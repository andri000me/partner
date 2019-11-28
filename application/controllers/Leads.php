<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('leads_model');
        $this->load->model('ticket_model');
        $this->load->model('branch_model');
        $this->load->model('user_model');
        $this->load->model('mapping_leads_model', 'mapping_leads');
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
            'data' => $this->leads_model->get(),
            'mapping' => $this->mapping_leads->get($this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all()
        ];
        $this->template->load('template/index', 'leads-form', $data);
    }

    public function edit($id)
    {

        $where = ['id_leads' => $id];
        $data = [
            'data' => $this->leads_model->get($where)->row(),
            'activities' => $this->leads_activity->get(['leads_activities.id_leads' => $id])

        ];

        $this->template->load('template/index', 'leads-detail', $data);
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        // $this->form_validation->set_rules('email', 'Alamat E-mail', 'required|is_unique[leads.email]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti nomor telepon']);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


        // if ($this->form_validation->run() != FALSE) {

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

            //Timestamp
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'           => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'         => $post['id_branch']
        ];

        //Memasukkan data mapping ke database `leads`

        $id = $this->leads_model->create($data);

        //Membuat history activity inputan data leads
        $leads_activity = [
            'activity' => 'Data leads telah dibuat',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_lead' => $id,
            'id_user' => $this->fungsi->user_login()->id_user
        ];

        $this->leads_activity->create($leads_activity);

        //Menambah antrian tiket untuk data leads
        $ticket = [
            'status'        => 0,
            'date_pending'  => date('Y-m-d H:i:s'),
            'id_lead'       => $id,
            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $this->ticket_model->create($ticket);

        //Notifikasi
        // $notification = [
        //     'pengirim' => $this->fungsi->user_login()->id_user,
        //     'type'      => 'new data',
        //     'id_lead'  => $id,
        //     'created_at' => date('Y-m-d H:i:s')
        // ];
        // $this->notification_model->create($notification);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil disimpan. <a href='#'>Lihat Data</a>");

        redirect('Leads');
        // } else {
        // $this->template->load('template/index', 'leads-form');
        // }
    }

    public function update()
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
            'id_lead' => $post['id_lead'],
            'id_user' => $post['id_user']
        ];

        $this->leads_activity->create($leads_activity);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect('Leads');
    }
}
