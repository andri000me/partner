<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agent extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        //Load Modul Agent
        $this->load->model('agent_model');
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
            'data' => $this->agent_model->get($this->where)
        ];

        $this->template->load('template/index', 'agent', $data);
    }

    public function create()
    {
        $this->template->load('template/index', 'agent-form');
    }

    public function edit($id)
    {

        $where = ['agents.id_agent' => $id];
        $data = [
            'data' => $this->agent_model->get($where)->row(),
            'activities' => $this->agent_activity->get($where),
            'comments' => $this->comment_model->get($where),
            'ticket' => $this->ticket_model->get($where)->row()
        ];

        $this->template->load('template/index', 'agent-detail', $data);
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('email', 'Alamat E-mail', 'required|is_unique[agents.email]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti nomor telepon']);
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|is_unique[agents.no_ktp]', ['is_unique' => 'Nomor KTP sudah terdaftar, mohon ganti nomor telepon']);
        $this->form_validation->set_rules('no_npwp', 'NPWP', 'required|is_unique[agents.no_npwp]', ['is_unique' => 'NPWP sudah terdaftar, mohon ganti nomor telepon']);
        $this->form_validation->set_rules('rekening_bank', 'Rekening Bank', 'required|is_unique[agents.rekening_bank]', ['is_unique' => 'Rekening Bank sudah terdaftar, mohon ganti nomor telepon']);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


        if ($this->form_validation->run() != FALSE) {

            $data = [
                'nama_lengkap'              => $post['nama_lengkap'],
                // 'jenis_kelamin'             => $post['jenis_kelamin'],
                'email'                     => $post['email'],
                'tanggal_lahir'             => $post['tanggal_lahir'],
                'no_ktp'                    => $post['no_ktp'],
                'no_npwp'                   => $post['no_npwp'],
                'pekerjaan'                 => $post['pekerjaan'],
                'jenis_pekerjaan'           => $post['jenis_pekerjaan'],
                'jenis_agent'               => $post['jenis_agent'],
                'status_kepemilikan_rumah'  => $post['status_kepemilikan_rumah'],
                'punya_pinjaman'            => $post['punya_pinjaman'],
                'afiliasi_travel'           => $post['afiliasi_travel'],
                'agent_konvensional'        => $post['agent_konvensional'],
                'hubungan_karyawan_bfi'     => $post['hubungan_karyawan_bfi'],
                'konsumen_bfi'              => $post['konsumen_bfi'],
                'income'                    => $post['income'],
                'rekening_bank'             => $post['rekening_bank'],
                'cabang_bank'               => $post['cabang_bank'],
                'nama_bank'                 => $post['nama_bank'],
                'atas_nama'                 => $post['atas_nama'],

                //Timestamp
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $post['id_user'],
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $post['id_branch']
            ];

            //Memasukkan data mapping ke database `Agents`

            $id = $this->agent_model->create($data);

            //Membuat history activity inputan data Agent
            $agent_activity = [
                'activity' => 'Data Agent telah dibuat',
                'date_activity' => date('Y-m-d H:i:s'),
                'id_agent' => $id,
                'id_user' => $post['id_user']
            ];

            $this->agent_activity->create($agent_activity);

            //Menambah antrian tiket untuk data Agentc
            $ticket = [
                'status'        => 0,
                'date_pending'  => date('Y-m-d H:i:s'),
                'id_agent'      => $id,
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $this->ticket_model->create($ticket);

            //Notifikasi
            $notification = [
                'pengirim' => $this->fungsi->user_login()->id_user,
                'type'      => 'new data',
                'id_agent'  => $id,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->notification_model->create($notification);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Agent berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Agent');
        } else {
            $this->template->load('template/index', 'agent-form');
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama_lengkap'              => $post['nama_lengkap'],
            // 'jenis_kelamin'             => $post['jenis_kelamin'],
            'email'                     => $post['email'],
            'tanggal_lahir'             => $post['tanggal_lahir'],
            'no_ktp'                    => $post['no_ktp'],
            'no_npwp'                   => $post['no_npwp'],
            'pekerjaan'                 => $post['pekerjaan'],
            'jenis_pekerjaan'           => $post['jenis_pekerjaan'],
            'jenis_agent'               => $post['jenis_agent'],
            'status_kepemilikan_rumah'  => $post['status_kepemilikan_rumah'],
            'punya_pinjaman'            => $post['punya_pinjaman'],
            'afiliasi_travel'           => $post['afiliasi_travel'],
            'agent_konvensional'        => $post['agent_konvensional'],
            'hubungan_karyawan_bfi'     => $post['hubungan_karyawan_bfi'],
            'konsumen_bfi'              => $post['konsumen_bfi'],
            'income'                    => $post['income'],
            'rekening_bank'             => $post['rekening_bank'],
            'cabang_bank'               => $post['cabang_bank'],
            'nama_bank'                 => $post['nama_bank'],
            'atas_nama'                 => $post['atas_nama'],

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            'id_branch'             => $post['id_branch']
        ];

        $where = ['id_agent' => $post['id_agent']];
        //Memasukkan data mapping ke database `Agents`
        $id = $this->agent_model->update($data, $where);

        //Membuat history activity inputan data Agent
        $agent_activity = [
            'activity' => 'Perubahan pada data Agent',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_agent' => $post['id_agent'],
            'id_user' => $post['id_user']
        ];

        $this->agent_activity->create($agent_activity);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data Agent berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect('Agent');
    }
}
