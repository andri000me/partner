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
            $this->where = ['id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $this->where = NULL;
        }

        // $cross_branch = $this->fungsi->user_login()->id_branch;

        check_not_login();
    }

    public function index()
    {
        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $where_leads = "id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangnya dan memunculkan data cross-branch.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $where_leads = "id_branch = " . $this->fungsi->user_login()->id_branch . " OR cabang_cross = " . $this->fungsi->user_login()->id_branch;
        } else {
            $where_leads = 'id_leads IS NOT NULL AND status = "lengkap"';
        }
        $data = [
            'data' => $this->leads_model->get($where_leads),
            // Menampilkan Data Leads belum funding
            'belum_funding' => $this->leads_model->get("sudah_funding = 'Belum' AND (" . $where_leads . ")"),
            // Menampilkan Data Leads sudah funding
            'sudah_funding' => $this->leads_model->get("sudah_funding = 'Sudah' AND (" . $where_leads . ")")
        ];

        $this->template->load('template/index', 'leads', $data);
    }

    public function create()
    {
        $data = [
            'mappings' => $this->mapping_leads->get($this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),

            'agents' => $this->agent_model->get($this->where),
            'partners' => $this->partner_model->get_mapping($this->where)
        ];
        $this->template->load('template/index', 'leads-form', $data);
    }

    public function edit($id)
    {

        $where = ['leads.id_leads' => $id];
        $data = [
            'data' => $this->leads_model->get($where)->row(),
            'mappings' => $this->mapping_leads->get($this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all(),

            'agents' => $this->agent_model->get($this->where),
            'partners' => $this->partner_model->get_mapping($this->where)
        ];
        $this->template->load('template/index', 'leads-edit', $data);
    }

    public function detail($id)
    {
        $where = ['leads.id_leads' => $id];

        $data = [
            'data'          => $this->leads_model->get($where)->row(),
            'mappings'      => $this->mapping_leads->get($this->where),
            'branches'      => $this->branch_model->get(),
            'users'         => $this->user_model->get_all(),

            'agents'        => $this->agent_model->get($this->where),
            'partners'      => $this->partner_model->get_mapping($this->where),

            'activities'    => $this->leads_activity->get($where),
            'comments'      => $this->comment_model->get($where),
            'ticket'        => $this->ticket_model->get($where)->row(),

            'follow_up'     => $this->leads_follow_up_model->get(['leads_follow_up.id_mapping_leads' => $this->leads_model->get($where)->row()->id_mapping_leads])

        ];
        $this->template->load('template/index', 'leads-detail', $data);
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        // $this->form_validation->set_rules('id_mapping_leads', 'ID Mapping Leads', 'required', ['required' => 'Mohon pilih data dari Mapping Leads']);
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'is_unique[leads.no_ktp]', ['is_unique' => 'Nomor KTP sudah dipakai, mohon ganti nomor KTP']);
        $this->form_validation->set_rules('leads_id', 'Leads ID', 'is_unique[leads.leads_id]', ['is_unique' => 'Leads ID sudah dipakai, mohon ganti Leads ID']);


        if ($this->form_validation->run() != FALSE) {
            $data_mapping_leads = [
                'nama_konsumen'         => !empty($post['nama_konsumen'])       ? $post['nama_konsumen'] : NULL,
                'telepon'               => !empty($post['telepon'])             ? $post['telepon'] : NULL,
                'soa'                   => !empty($post['soa'])                 ? $post['soa'] : NULL,
                'produk'                => !empty($post['produk'])              ? $post['produk'] : NULL,
                'detail_produk'         => !empty($post['detail_produk'])       ? $post['detail_produk'] : NULL,
                'nama_event'            => !empty($post['nama_event'])          ? $post['nama_event'] : NULL,

                // Untuk SOA EGC
                'nik_egc'               => !empty($post['nik_egc'])             ? $post['nik_egc'] : NULL,
                'posisi_egc'            => !empty($post['posisi_egc'])          ? $post['posisi_egc'] : NULL,
                'cabang_egc'            => !empty($post['cabang_egc'])          ? $post['cabang_egc'] : NULL,
                // Untuk SOA CGC / RO
                'nomor_kontrak'         => !empty($post['nomor_kontrak'])       ? $post['nomor_kontrak'] : NULL,
                'referral_konsumen'     => !empty($post['referral_konsumen'])   ? $post['referral_konsumen'] : NULL,

                // Untuk SOA Event
                'nama_event'            => !empty($post['nama_event'])          ? $post['nama_event'] : NULL,

                'nama_partner'            => !empty($post['data_partner'])      ? $post['data_partner'] : NULL,
                'nama_agent'            => !empty($post['data_agent'])          ? $post['data_agent'] : NULL,


                'updated_at'            => date('Y-m-d H:i:s'),

                'id_mapping'            => !empty($post['id_mapping'])          ? $post['id_mapping'] : NULL,
                // 'id_partner'            => !empty($post['id_partner'])          ? $post['id_partner'] : NULL,
                'id_agent'              => !empty($post['id_agent'])            ? $post['id_agent'] : NULL
            ];

            $where_mapping_leads = ['id_mapping_leads' => $post['id_mapping_leads']];

            if ($post['id_mapping_leads'] != '' || $post['id_mapping_leads'] != NULL) {
                $this->mapping_leads->update($data_mapping_leads, $where_mapping_leads);
            } else {
                $data_mapping_leads['created_at'] = date('Y-m-d H:i:s');
                $data_mapping_leads['updated_at'] = date('Y-m-d H:i:s');
                $data_mapping_leads['id_user'] = $this->fungsi->user_login()->id_user;
                $data_mapping_leads['id_branch'] = $this->fungsi->user_login()->id_branch;

                $id_mapping_leads = $this->mapping_leads->create($data_mapping_leads);
            }
            $data = [
                'id_mapping_leads' => ($post['id_mapping_leads'] != '' || $post['id_mapping_leads'] != NULL) ? $post['id_mapping_leads'] : $id_mapping_leads,

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
            $config['upload_path']         = './uploads/leads';
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

                //Leads Follow Up
                $data_leads_follow_up = [
                    'follow_up_by' => $post['follow_up_by'],
                    'date_follow_up' => date('Y-m-d H:i:s'),
                    // 'catatan' => $post['catatan'],

                    //Timestamp
                    // 'created_at' => date('Y-m-d H:i:s'),
                    // 'updated_at' => date('Y-m-d H:i:s'),

                    //ID User yang mencatat leads follow up
                    'id_user' => $this->fungsi->user_login()->id_user,

                    //ID Mapping Leads yang di follow-up
                    'id_mapping_leads' => ($post['id_mapping_leads'] != '' || $post['id_mapping_leads'] != NULL) ? $post['id_mapping_leads'] : $id_mapping_leads
                ];
                $this->leads_follow_up_model->create($data_leads_follow_up);
            }
            if ($id) {
                //Memberi pesan berhasil data menyimpan data mapping
                $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil disimpan. <a href='#'>Lihat Data</a>");
                // sleep(6);
                redirect('Leads');
            }
        } else {
            $data = [
                'mappings' => $this->mapping_leads->get($this->where),
                'branches' => $this->branch_model->get(),
                'users' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),

                'agents' => $this->agent_model->get($this->where),
                'partners' => $this->partner_model->get_mapping($this->where)
            ];
            $this->template->load('template/index', 'leads-form', $data);
        }
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

            'id_mapping'            => !empty($post['id_mapping'])          ? $post['id_mapping'] : NULL,
            // 'id_partner'            => !empty($post['id_partner'])          ? $post['id_partner'] : NULL,
            'id_agent'              => !empty($post['id_agent'])            ? $post['id_agent'] : NULL

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
            'nilai_funding'     => !empty($post['nilai_funding']) ? str_replace(",", "", $post['nilai_funding']) : NULL,
            'sudah_funding'     => !empty($post['sudah_funding']) ? $post['sudah_funding'] : 'Belum',

            //Timestamp
            // 'created_at'        => date('Y-m-d H:i:s'),
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

            //Notifikasi
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
                'id_mapping_leads' => $post['id_mapping_leads']
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

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil diupdate. <a href='#'>Lihat Data</a>");

        // sleep(6);
        if (isset($post['draft'])) {
            redirect($post['redirect']);
        } else if (isset($post['process'])) {
            redirect('leads');
        }
    }

    public function update_detail()
    {
        $post = $this->input->post(NULL, TRUE);

        $mapping_leads = [
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

            //ID Agent
            'id_agent'              => !empty($post['id_agent']) ? $post['id_agent'] : NULL,
            //ID Mapping Partner
            'id_mapping'            => !empty($post['id_mapping']) ? $post['id_mapping'] : NULL,

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
            'nilai_funding'     => !empty($post['nilai_funding']) ? str_replace(",", "", $post['nilai_funding']) : NULL,
            'sudah_funding'     => !empty($post['sudah_funding']) ? $post['sudah_funding'] : 'Belum',

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'             => $post['id_branch']
        ];

        $where = ['id_leads' => $post['id_leads']];
        //Memasukkan data mapping ke database `leads`
        $id = $this->leads_model->update($data, $where);

        //Leads Follow Up
        $data = [
            'follow_up_by' => $post['follow_up_by'],
            'date_follow_up' => date('Y-m-d H:i:s'),
            // 'catatan' => $post['catatan'],

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),

            //ID User yang mencatat leads follow up
            'id_user' => $this->fungsi->user_login()->id_user,

            //ID Mapping Leads yang di follow-up
            'id_mapping_leads' => $post['id_mapping_leads']
        ];
        $this->leads_follow_up_model->create($data);

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
