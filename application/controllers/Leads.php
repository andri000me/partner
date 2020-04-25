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
        // Load Modul Comment
        $this->load->model('comment_model');
        // Load Modul Notification
        $this->load->model('notification_model');
        // Load Modul Leads Activity
        $this->load->model('leads_activity_model', 'leads_activity');
        // Load Modul Leads Follow Up
        $this->load->model('leads_follow_up_model');

        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "id_branch = " . $this->fungsi->user_login()->id_branch;
        } else {
            $this->where = "id_user IS NOT NULL";
        }

        // $cross_branch = $this->fungsi->user_login()->id_branch;

        check_not_login();
    }

    //Notification Method
    private function notification($id_ticket, $message)
    {
        $notification = [
            'pengirim'          => $this->fungsi->user_login()->id_user,
            // 'penerima'          => $this->ticket_model->get(['id_ticket' => $id_ticket])->row()->user_id,
            'penerima_cabang'   => 46,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $notification;
    }

    public function index()
    {
        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $where_leads = "users.id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangnya dan memunculkan data cross-branch.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $where_leads = "branches.id_branch = " . $this->fungsi->user_login()->id_branch . " OR cabang_cross = " . $this->fungsi->user_login()->id_branch;
        } else {
            $where_leads = 'status = "lengkap"';
        }
        $data = [
            'data' => $this->leads_model->get($where_leads),
            // Menampilkan Data Leads belum funding
            'belum_funding' => $this->leads_model->get("sudah_funding = 'Belum' AND (" . $where_leads . ") AND (status = 'draft' OR status = 'lengkap')"),
            // Menampilkan Data Leads sudah funding
            'sudah_funding' => $this->leads_model->get("sudah_funding = 'Sudah' AND (" . $where_leads . ") AND (status = 'draft' OR status = 'lengkap')")
        ];

        $this->template->load('template/index', 'leads', $data);
    }

    public function leads_database()
    {
        $data = [
            'data'      => $this->leads_model->get("status= 'database' AND leads_full.". $this->where),
        ];

        $this->template->load('template/index', 'leads-mapping', $data);
    }

    public function create()
    {
        $data = [
            'mappings'  => $this->leads_model->get("status= 'database' AND leads_full.". $this->where),
            'branches'  => $this->branch_model->get(),
            'users'     => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),

            'agents'    => $this->agent_model->get("agents.". $this->where),
            'partners'  => $this->partner_model->get("partners_full." .$this->where)
        ];
        $this->template->load('template/index', 'leads-form', $data);
    }

    public function create_database()
    {

        $data = [
            'agents' => $this->agent_model->get('agents.' . $this->where),
            'partners' => $this->partner_model->get('partners_full.'.$this->where)
        ];
        $this->template->load('template/index', 'leads-mapping-form', $data);
    }

    

    public function edit($id)
    {

        $where = ['leads_full.id_leads' => $id];
        $data = [
            'data' => $this->leads_model->get($where)->row(),
            'mappings'      => $this->leads_model->get("status= 'database' AND leads_full.". $this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all(),

            'agents' => $this->agent_model->get("agents." .$this->where),
            'partners' => $this->partner_model->get("partners_full." .$this->where)
        ];
        $this->template->load('template/index', 'leads-edit', $data);
    }

    public function edit_database($id)
    {
        $data = [
            'data' => $this->leads_model->get(['leads_full.id_leads' => $id])->row(),
            'agents' => $this->agent_model->get('agents.'. $this->where),
            'partners' => $this->partner_model->get('partners_full.'.$this->where),
            'follow_up' => $this->leads_follow_up_model->get(['leads_full.id_leads' => $id])
        ];
        $this->template->load('template/index', 'leads-mapping-edit', $data);
    }

    public function detail($id)
    {
        $where = ['leads_full.id_leads' => $id];

        $data = [
            'data'          => $this->leads_model->get($where)->row(),
            'mappings'      => $this->leads_model->get("status= 'database' AND leads_full.". $this->where),
            'branches'      => $this->branch_model->get(),
            'users'         => $this->user_model->get_all(),

            'agents'        => $this->agent_model->get("agents.".$this->where),
            'partners'      => $this->partner_model->get("partners_full." .$this->where),

            'activities'    => $this->leads_activity->get($where),
            'comments'      => $this->comment_model->get($where),
            'ticket'        => $this->ticket_model->get($where)->row(),

            'follow_up'     => $this->leads_follow_up_model->get(['leads_follow_up.id_leads' => $this->leads_model->get($where)->row()->id_leads])

        ];
        $this->template->load('template/index', 'leads-detail', $data);
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        // $this->form_validation->set_rules('id_partner_leads', 'ID Mapping Leads', 'required', ['required' => 'Mohon pilih data dari Mapping Leads']);
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'is_unique[leads_full.no_ktp]', ['is_unique' => 'Nomor KTP sudah dipakai, mohon ganti nomor KTP']);
        $this->form_validation->set_rules('leads_id', 'Leads ID', 'is_unique[leads_full.leads_id]', ['is_unique' => 'Leads ID sudah dipakai, mohon ganti Leads ID']);


        if ($this->form_validation->run() != FALSE) {
            $data = [
                // ------ LEADS DATABASE
                'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
                'pekerjaan_konsumen'    => !empty($post['pekerjaan_konsumen']) ? $post['pekerjaan_konsumen'] : NULL,
                'status_konsumen'       => !empty($post['status_konsumen']) ? $post['status_konsumen'] : NULL,
                'tanggal_lahir'         => !empty($post['tanggal_lahir']) ? $post['tanggal_lahir'] : NULL,
                'status_pernikahan'     => !empty($post['status_pernikahan']) ? $post['status_pernikahan'] : NULL,
                'nama_pasangan'         => !empty($post['nama_pasangan']) ? $post['nama_pasangan'] : NULL,
                'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
                'soa'                   => !empty($post['soa']) ? $post['soa'] : NULL,
                'produk'                => !empty($post['produk']) ? $post['produk'] : NULL,
                'detail_produk'         => !empty($post['detail_produk']) ? $post['detail_produk'] : NULL,
                
                // Untuk SOA EGC
                'nik_egc'               => !empty($post['nik_egc']) ? $post['nik_egc'] : NULL,
                'posisi_egc'            => !empty($post['posisi_egc']) ? $post['posisi_egc'] : NULL,
                'cabang_egc'            => !empty($post['cabang_egc']) ? $post['cabang_egc'] : NULL,
                // Untuk SOA CGC / RO
                'nomor_kontrak'         => !empty($post['nomor_kontrak']) ? $post['nomor_kontrak'] : NULL,
                'referral_konsumen'     => !empty($post['referral_konsumen']) ? $post['referral_konsumen'] : NULL,
                // Untuk SOA Event
                'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,
                
                'nama_partner'            => !empty($post['data_partner']) ? $post['data_partner'] : NULL,
                'nama_agent'            => !empty($post['data_agent']) ? $post['data_agent'] : NULL,
                
                //Timestamp
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
                
                // ----- PROSPECT
                'follow_up_by'      => !empty($post['follow_up_by']) ? $post['follow_up_by'] : NULL,
                'no_ktp'            => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
                'leads_id'          => !empty($post['leads_id']) ? $post['leads_id'] : NULL,
                'cross_branch'      => !empty($post['cross_branch']) ? $post['cross_branch'] : NULL,
                'cabang_cross'      => !empty($post['cabang_cross']) ? $post['cabang_cross'] : NULL,
                'surveyor'          => !empty($post['surveyor']) ? $post['surveyor'] : NULL,
                'pic_ttd'           => !empty($post['pic_ttd']) ? $post['pic_ttd'] : NULL,
                'appeal_nst'        => !empty($post['appeal_nst'])  ? $post['appeal_nst'] : NULL,
                'nilai_funding'     => !empty($post['nilai_funding']) ? str_replace(",", "", $post['nilai_funding']) : NULL,
                'sudah_funding'     => !empty($post['sudah_funding']) ? $post['sudah_funding'] : 'Belum',

                //Timestamp
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),

                'id_partner'            => !empty($post['id_partner'])          ? $post['id_partner'] : NULL,
                'id_agent'              => !empty($post['id_agent'])            ? $post['id_agent'] : NULL,
                
                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $this->fungsi->user_login()->id_user,
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $this->fungsi->user_login()->id_branch,
            ];

            if (isset($post['draft'])) {
                $data['status'] = 'draft';
            } else if (isset($post['process'])) {
                $data['status'] = 'lengkap';
            }
            
            // Jika Leads Database dipilih / terisi, maka leads database yang ada akan diupdate
            // Jika tak dipilih, maka akan membuat record leads baru
            if(!empty($post['id_leads'])){
                $id = $post["id_leads"];

                //menghapuskan date created, untuk proses update
                unset($data["created_at"]);
                $this->leads_model->update($data, ["id_leads" => $id]);
            } else {
                $id = $this->leads_model->create($data);
            }

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
                //Menambah ke antrian tiket
                $ticket = [
                    // 'status'        => 0,
                    'status'        => 2,
                    'date_pending'  => date('Y-m-d H:i:s'),
                    'date_created'  => date('Y-m-d H:i:s'),
                    'date_modified'  => date('Y-m-d H:i:s'),
                    'id_leads'       => $id,
                    'id_user'       => $this->fungsi->user_login()->id_user,
                    'id_branch'     => $this->fungsi->user_login()->id_branch
                ];
                $id_ticket = $this->ticket_model->create($ticket);

                //Notifikasi
                $notification = [
                    'pengirim'          => $this->fungsi->user_login()->id_user,
                    'penerima_cabang'   => $post['cabang_cross'],
                    'type'              => 'Cross Branch oleh',
                    'id_ticket'         => $id_ticket,
                    'created_at'        => date('Y-m-d H:i:s')
                ];
                $this->notification_model->create($notification);

                //Membuat notifikasi tiket baru untuk Admin
                $notification_admin = $this->notification($id_ticket, 'Tiket Baru');
                $this->notification_model->create($notification_admin);
            }
            if ($id) {
                //Memberi pesan berhasil data menyimpan data mapping
                $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil disimpan. <a href='#'>Lihat Data</a>");
                // sleep(6);
                redirect('Leads');
            }
        } else {
            $data = [
                'mappings'  => $this->leads_model->get("status= 'database' AND leads_full.". $this->where),
                'branches'  => $this->branch_model->get(),
                'users'     => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),
    
                'agents'    => $this->agent_model->get("agents.". $this->where),
                'partners'  => $this->partner_model->get("partners_full." .$this->where)
            ];
            $this->template->load('template/index', 'leads-form', $data);
        }
    }

    public function save_database()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $this->form_validation->set_rules('telepon', 'Telepon', 'required|is_unique[leads_full.telepon]', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
                'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
                'soa'                   => !empty($post['soa']) ? $post['soa'] : NULL,
                'produk'                => !empty($post['produk']) ? $post['produk'] : NULL,
                'detail_produk'         => !empty($post['detail_produk']) ? $post['detail_produk'] : NULL,
                // Untuk SOA EGC
                'nik_egc'               => !empty($post['nik_egc']) ? $post['nik_egc'] : NULL,
                'posisi_egc'            => !empty($post['posisi_egc']) ? $post['posisi_egc'] : NULL,
                'cabang_egc'            => !empty($post['cabang_egc']) ? $post['cabang_egc'] : NULL,
                // Untuk SOA CGC / RO
                'nomor_kontrak'         => !empty($post['nomor_kontrak']) ? $post['nomor_kontrak'] : NULL,
                'referral_konsumen'     => !empty($post['referral_konsumen']) ? $post['referral_konsumen'] : NULL,
                // Untuk SOA Event
                'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,

                'nama_partner'            => !empty($post['data_partner']) ? $post['data_partner'] : NULL,
                'nama_agent'            => !empty($post['data_agent']) ? $post['data_agent'] : NULL,

                //Timestamp
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),

                'id_partner'            => !empty($post['id_partner']) ? $post['id_partner'] : NULL,
                'id_agent'              => !empty($post['id_agent']) ? $post['id_agent'] : NULL,
                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $this->fungsi->user_login()->id_user,
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $this->fungsi->user_login()->id_branch
            ];

            //Memasukkan data mapping ke database `leads`
            $data['status'] = 'database';
            $id = $this->leads_model->create($data);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Leads Database berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('leads/leads_database');
        } else {
            $data = [
                'agents' => $this->agent_model->get('agents.'. $this->where),
                'partners' => $this->partner_model->get('partners_full.'.$this->where),
            ];
            $this->template->load('template/index', 'leads-mapping-form', $data);
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);


        $data = [
            // ------ LEADS DATABASE
            'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
            'pekerjaan_konsumen'    => !empty($post['pekerjaan_konsumen']) ? $post['pekerjaan_konsumen'] : NULL,
            'status_konsumen'       => !empty($post['status_konsumen']) ? $post['status_konsumen'] : NULL,
            'tanggal_lahir'         => !empty($post['tanggal_lahir']) ? $post['tanggal_lahir'] : NULL,
            'status_pernikahan'     => !empty($post['status_pernikahan']) ? $post['status_pernikahan'] : NULL,
            'nama_pasangan'         => !empty($post['nama_pasangan']) ? $post['nama_pasangan'] : NULL,
            'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
            'soa'                   => !empty($post['soa']) ? $post['soa'] : NULL,
            'produk'                => !empty($post['produk']) ? $post['produk'] : NULL,
            'detail_produk'         => !empty($post['detail_produk']) ? $post['detail_produk'] : NULL,
            
            // Untuk SOA EGC
            'nik_egc'               => !empty($post['nik_egc']) ? $post['nik_egc'] : NULL,
            'posisi_egc'            => !empty($post['posisi_egc']) ? $post['posisi_egc'] : NULL,
            'cabang_egc'            => !empty($post['cabang_egc']) ? $post['cabang_egc'] : NULL,
            // Untuk SOA CGC / RO
            'nomor_kontrak'         => !empty($post['nomor_kontrak']) ? $post['nomor_kontrak'] : NULL,
            'referral_konsumen'     => !empty($post['referral_konsumen']) ? $post['referral_konsumen'] : NULL,
            // Untuk SOA Event
            'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,
            
            'nama_partner'            => !empty($post['data_partner']) ? $post['data_partner'] : NULL,
            'nama_agent'            => !empty($post['data_agent']) ? $post['data_agent'] : NULL,

            // ----- PROSPECT
            'follow_up_by'      => !empty($post['follow_up_by']) ? $post['follow_up_by'] : NULL,
            'no_ktp'            => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
            'leads_id'          => !empty($post['leads_id']) ? $post['leads_id'] : NULL,
            'cross_branch'      => !empty($post['cross_branch']) ? $post['cross_branch'] : NULL,
            'cabang_cross'      => !empty($post['cabang_cross']) ? $post['cabang_cross'] : NULL,
            'surveyor'          => !empty($post['surveyor']) ? $post['surveyor'] : NULL,
            'pic_ttd'           => !empty($post['pic_ttd']) ? $post['pic_ttd'] : NULL,
            'appeal_nst'        => !empty($post['appeal_nst'])  ? $post['appeal_nst'] : NULL,
            'nilai_funding'     => !empty($post['nilai_funding']) ? str_replace(",", "", $post['nilai_funding']) : NULL,
            'sudah_funding'     => !empty($post['sudah_funding']) ? $post['sudah_funding'] : 'Belum',

            //Timestamp
            // 'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),

            'id_partner'            => !empty($post['id_partner'])          ? $post['id_partner'] : NULL,
            'id_agent'              => !empty($post['id_agent'])            ? $post['id_agent'] : NULL
        ];
        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';

            //Menambah antrian ke tiket
            $ticket = [
                // 'status'        => 0,
                'status'        => 2,
                'date_pending'  => date('Y-m-d H:i:s'),
                'date_created'  => date('Y-m-d H:i:s'),
                'date_modified' => date('Y-m-d H:i:s'),
                'id_leads'      => $post['id_leads'],
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $id_ticket = $this->ticket_model->create($ticket);

            //Membuat notifikasi tiket baru untuk Admin
            $notification = $this->notification($id_ticket, 'Tiket Baru');
            $this->notification_model->create($notification);

            //Notifikasi Cross Branch
            $notification = [
                'pengirim'          => $this->fungsi->user_login()->id_user,
                'penerima_cabang'   => $post['cabang_cross'],
                'type'              => 'Cross Branch oleh',
                'id_ticket'         => $id_ticket,
                'created_at'        => date('Y-m-d H:i:s')
            ];
            $this->notification_model->create($notification);

            //Leads Follow Up
            $data_leads_follow_up = [
                'follow_up_by' => $post['follow_up_by'],
                'date_follow_up' => date('Y-m-d H:i:s'),

                //ID User yang mencatat leads follow up
                'id_user' => $this->fungsi->user_login()->id_user,

                //ID Mapping Leads yang di follow-up
                'id_leads' => $post['id_leads']
            ];
            $this->leads_follow_up_model->create($data_leads_follow_up);
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

        //Membuat notifikasi Perubahan Data untuk Admin
        $notification = $this->notification($post['id_ticket'], 'Perubahan Data');
        $this->notification_model->create($notification);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil diupdate. <a href='#'>Lihat Data</a>");
        
        if (isset($post['draft'])) {
            redirect($post['redirect']);
        } else if (isset($post['process'])) {
            redirect('leads');
        }
    }

    public function update_database()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama_konsumen'         => $post['nama_konsumen'],
            'telepon'               => $post['telepon'],
            'soa'                   => $post['soa'],
            'produk'                => $post['produk'],
            'detail_produk'         => $post['detail_produk'],
            // Untuk SOA EGC
            'nik_egc'               => !empty($post['nik_egc']) ? $post['nik_egc'] : NULL,
            'posisi_egc'            => !empty($post['posisi_egc']) ? $post['posisi_egc'] : NULL,
            'cabang_egc'            => !empty($post['cabang_egc']) ? $post['cabang_egc'] : NULL,
            // Untuk SOA CGC / RO
            'nomor_kontrak'         => !empty($post['nomor_kontrak']) ? $post['nomor_kontrak'] : NULL,
            'referral_konsumen'     => !empty($post['referral_konsumen']) ? $post['referral_konsumen'] : NULL,
            // Untuk SOA Event
            'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,

            'nama_partner'            => !empty($post['data_partner']) ? $post['data_partner'] : NULL,
            'nama_agent'            => !empty($post['data_agent']) ? $post['data_agent'] : NULL,

            //Timestamp
            // 'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            'id_partner'            => !empty($post['id_partner']) ? $post['id_partner'] : NULL,
            'id_agent'              => !empty($post['id_agent']) ? $post['id_agent'] : NULL,

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'               => $this->fungsi->user_login()->id_user,
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

        $where = ['id_leads' => $post['id_leads']];

        //Memasukkan data mapping ke database `leadss`
        $id = $this->leads_model->update($data, $where);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Leads Database berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect($post['redirect']);
    }

    public function update_detail()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            // ------ LEADS DATABASE
            'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
            'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
            'soa'                   => !empty($post['soa']) ? $post['soa'] : NULL,
            'produk'                => !empty($post['produk']) ? $post['produk'] : NULL,
            'detail_produk'         => !empty($post['detail_produk']) ? $post['detail_produk'] : NULL,
            
            // Untuk SOA EGC
            'nik_egc'               => !empty($post['nik_egc']) ? $post['nik_egc'] : NULL,
            'posisi_egc'            => !empty($post['posisi_egc']) ? $post['posisi_egc'] : NULL,
            'cabang_egc'            => !empty($post['cabang_egc']) ? $post['cabang_egc'] : NULL,
            // Untuk SOA CGC / RO
            'nomor_kontrak'         => !empty($post['nomor_kontrak']) ? $post['nomor_kontrak'] : NULL,
            'referral_konsumen'     => !empty($post['referral_konsumen']) ? $post['referral_konsumen'] : NULL,
            // Untuk SOA Event
            'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,
            
            'nama_partner'            => !empty($post['data_partner']) ? $post['data_partner'] : NULL,
            'nama_agent'            => !empty($post['data_agent']) ? $post['data_agent'] : NULL,
            
            // ----- PROSPECT
            'follow_up_by'      => !empty($post['follow_up_by']) ? $post['follow_up_by'] : NULL,
            'no_ktp'            => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
            'leads_id'          => !empty($post['leads_id']) ? $post['leads_id'] : NULL,
            'cross_branch'      => !empty($post['cross_branch']) ? $post['cross_branch'] : NULL,
            'cabang_cross'      => !empty($post['cabang_cross']) ? $post['cabang_cross'] : NULL,
            'surveyor'          => !empty($post['surveyor']) ? $post['surveyor'] : NULL,
            'pic_ttd'           => !empty($post['pic_ttd']) ? $post['pic_ttd'] : NULL,
            'appeal_nst'        => !empty($post['appeal_nst'])  ? $post['appeal_nst'] : NULL,
            'nilai_funding'     => !empty($post['nilai_funding']) ? str_replace(",", "", $post['nilai_funding']) : NULL,
            'sudah_funding'     => !empty($post['sudah_funding']) ? $post['sudah_funding'] : 'Belum',

            //Timestamp
            // 'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),

            'id_partner'            => !empty($post['id_partner'])          ? $post['id_partner'] : NULL,
            'id_agent'              => !empty($post['id_agent'])            ? $post['id_agent'] : NULL
        ];

        $where = ['id_leads' => $post['id_leads']];
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

        //Meng-update antrian tiket untuk data Leads
        $has_superior = $this->fungsi->user_login()->has_superior;
        $ticket = [
            // 'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            // 'date_created'  => date('Y-m-d H:i:s'),
            'date_modified'  => date('Y-m-d H:i:s')
            // 'id_user'       => $this->fungsi->user_login()->id_user,
            // 'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $where_ticket = ['id_ticket' => $post['id_ticket']];
        $this->ticket_model->update($ticket, $where_ticket);

        //Membuat notifikasi Perubahan Data untuk Admin
        $notification = $this->notification($post['id_ticket'], 'Perubahan Data');
        $this->notification_model->create($notification);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect($post['redirect']);
    }

    // AJAX Controller
    // mengambil list user untuk cross branch
    public function get_user($cabang_cross = NULL)
    {
        //Secara default memunculkan list cabang si user
        if ($cabang_cross == NULL) {
            $cabang_cross = $this->fungsi->user_login()->id_branch;
        }
        $data = $this->user_model->get_all(['users.id_branch' => $cabang_cross]);
        echo json_encode($data->result());
    }

    public function get_leads($id)
    {
        $where = ['leads.id_leads' => $id];
        echo json_encode($this->leads_model->get($where)->row());
    }

    // Form Valdation
    public function leads_check()
    {
    }
}