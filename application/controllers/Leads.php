<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();

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
            'penerima_cabang'   => 46,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $notification;
    }

    // Data Leads Prospect
    private function submitted_leads_prospect()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            // ------ LEADS DATABASE
            'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
            'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
            'nomor_wa'               => !empty($post['nomor_wa']) ? $post['nomor_wa'] : NULL,
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
            'nomor_kontrak'         => !empty($post['nomor_kontrak_cgc']) ? $post['nomor_kontrak_cgc'] : NULL,
            'referral_konsumen'     => !empty($post['referral_konsumen_cgc']) ? $post['referral_konsumen_cgc'] : NULL,
            // Untuk SOA Event
            'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,

            'nama_partner'            => !empty($post['nama_partner']) ? $post['nama_partner'] : NULL,
            'nama_agent'            => !empty($post['nama_agent']) ? $post['nama_agent'] : NULL,

            //Timestamp
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            // ----- PROSPECT
            'no_ktp'                => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
            'no_npwp'                => !empty($post['no_npwp']) ? $post['no_npwp'] : NULL,
            'cross_branch'          => !empty($post['cross_branch']) ? $post['cross_branch'] : NULL,
            'cabang_cross'          => !empty($post['cabang_cross']) ? $post['cabang_cross'] : NULL,

            // 'follow_up_by'          => !empty($post['follow_up_by']) ? $post['follow_up_by'] : NULL,
            // 'leads_id'              => !empty($post['leads_id']) ? $post['leads_id'] : NULL,
            // 'surveyor'              => !empty($post['surveyor']) ? $post['surveyor'] : NULL,
            // 'pic_ttd'               => !empty($post['pic_ttd']) ? $post['pic_ttd'] : NULL,
            // 'appeal_nst'            => !empty($post['appeal_nst'])  ? $post['appeal_nst'] : NULL,
            // 'nilai_funding'         => !empty($post['nilai_funding']) ? str_replace(",", "", $post['nilai_funding']) : NULL,
            // 'sudah_funding'         => !empty($post['sudah_funding']) ? $post['sudah_funding'] : 'Belum',

            'pekerjaan_konsumen'    => !empty($post['pekerjaan_konsumen']) ? $post['pekerjaan_konsumen'] : NULL,
            'jenis_konsumen'        => !empty($post['jenis_konsumen']) ? $post['jenis_konsumen'] : NULL,
            'tanggal_lahir'         => !empty($post['tanggal_lahir']) ? $post['tanggal_lahir'] : NULL,
            'status_pernikahan'     => !empty($post['status_pernikahan']) ? $post['status_pernikahan'] : NULL,
            'nama_pasangan'         => !empty($post['nama_pasangan']) ? $post['nama_pasangan'] : NULL,
            'pendidikan'            => !empty($post['pendidikan']) ? $post['pendidikan'] : NULL,
            'email_konsumen'        => !empty($post['email_konsumen']) ? $post['email_konsumen'] : NULL,
            'lokasi_rumah'          => !empty($post['lokasi_rumah']) ? $post['lokasi_rumah'] : NULL,
            'jenis_rumah'           => !empty($post['jenis_rumah']) ? $post['jenis_rumah'] : NULL,
            'luas_rumah'            => !empty($post['luas_rumah']) ? $post['luas_rumah'] : NULL,
            'activity_marketing'    => !empty($post['activity_marketing']) ? $post['activity_marketing'] : NULL,
            'jenis_kelamin'         => !empty($post['jenis_kelamin']) ? $post['jenis_kelamin'] : NULL,

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

        return $data;
    }

    private function submitted_leads_database()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
            'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
            'nomor_wa'               => !empty($post['nomor_wa']) ? $post['nomor_wa'] : NULL,
            'soa'                   => !empty($post['soa']) ? $post['soa'] : NULL,
            'activity_marketing'    => !empty($post['activity_marketing']) ? $post['activity_marketing'] : NULL,
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

            'nama_partner'            => !empty($post['nama_partner']) ? $post['nama_partner'] : NULL,
            'nama_agent'            => !empty($post['nama_agent']) ? $post['nama_agent'] : NULL,

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

        return $data;
    }

    public function index()
    {
        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1)
            $data['data'] = $this->leads_model->get("users.id_user = " . $this->fungsi->user_login()->id_user . " AND (status = 'draft' OR status = 'lengkap')");
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangnya dan memunculkan data cross-branch.
        if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3)
            $data['data'] = $this->leads_model->get("branches.id_branch = " . $this->fungsi->user_login()->id_branch . " OR cabang_cross = " . $this->fungsi->user_login()->id_branch . " AND (status = 'draft' OR status = 'lengkap')");
        if ($this->fungsi->user_login()->level >= 4)
            $data['data'] = $this->leads_model->get("status = 'lengkap'");

        $this->template->load('template/index', 'leads', $data);
    }

    public function leads_database()
    {
        $data = [
            'data'      => $this->leads_model->get("status= 'database' AND leads_full." . $this->where),
        ];

        $this->template->load('template/index', 'leads-mapping', $data);
    }

    public function create()
    {
        $data = [
            'mappings'  => $this->leads_model->get("status= 'database' AND leads_full." . $this->where),
            'branches'  => $this->branch_model->get(),
            'users'     => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),

            'agents'    => $this->agent_model->get("agents." . $this->where),
            'partners'  => $this->partner_model->get("partners_full." . $this->where)
        ];
        $this->template->load('template/index', 'leads-form', $data);
    }

    public function create_database()
    {

        $data = [
            'agents' => $this->agent_model->get('agents.' . $this->where),
            'partners' => $this->partner_model->get('partners_full.' . $this->where)
        ];
        $this->template->load('template/index', 'leads-mapping-form', $data);
    }

    public function edit($id)
    {

        $where = ['leads_full.id_leads' => $id];
        $data = [
            'data' => $this->leads_model->get($where)->row(),
            'mappings'      => $this->leads_model->get("status= 'database' AND leads_full." . $this->where),
            'branches' => $this->branch_model->get(),
            'users' => $this->user_model->get_all(),

            'agents' => $this->agent_model->get("agents." . $this->where),
            'partners' => $this->partner_model->get("partners_full." . $this->where)
        ];
        $this->template->load('template/index', 'leads-edit', $data);
    }

    public function edit_database($id)
    {
        $data = [
            'data' => $this->leads_model->get(['leads_full.id_leads' => $id])->row(),
            'agents' => $this->agent_model->get('agents.' . $this->where),
            'partners' => $this->partner_model->get('partners_full.' . $this->where),
            'follow_up' => $this->leads_follow_up_model->get(['leads_full.id_leads' => $id])
        ];
        $this->template->load('template/index', 'leads-mapping-edit', $data);
    }

    public function detail($id)
    {
        $where = ['leads_full.id_leads' => $id];

        $data = [
            'data'          => $this->leads_model->get($where)->row(),
            'mappings'      => $this->leads_model->get("status= 'database' AND leads_full." . $this->where),
            'branches'      => $this->branch_model->get(),
            'users'         => $this->user_model->get_all(),

            'agents'        => $this->agent_model->get("agents." . $this->where),
            'partners'      => $this->partner_model->get("partners_full." . $this->where),

            'activities'    => $this->leads_activity_model->get($where),
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
        // $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'is_unique[leads_full.no_ktp]', ['is_unique' => 'Nomor KTP sudah dipakai, mohon ganti nomor KTP']);

        // if ($this->form_validation->run() != FALSE) {
        $data = $this->submitted_leads_prospect();

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';
        }

        // Jika Leads Database dipilih / terisi, maka leads database yang ada akan diupdate
        // Jika tak dipilih, maka akan membuat record leads baru
        if (!empty($post['id_leads'])) {
            $id = $post["id_leads"];

            //menghapuskan date created, untuk proses update
            unset($data["created_at"], $data["id_user"], $data["id_branch"]);
            $this->leads_model->update($data, ["id_leads" => $id]);
        } else {
            $id = $this->leads_model->create($data);
        }

        //Membuat history activity inputan data leads
        $leads_activity_model = [
            'activity'      => 'Data leads telah dibuat',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_leads'      => $id,
            'id_user'       => $this->fungsi->user_login()->id_user
        ];

        $this->leads_activity_model->create($leads_activity_model);

        //Menambah antrian tiket untuk data leads
        if (isset($post['process'])) {
            //Menambah ke antrian tiket
            $id_ticket = $this->tiket->tambah_tiket('id_leads', $id);

            //Notifikasi untuk cross branch
            $this->notifikasi->cross_branch($id_ticket, 'Cross Branch oleh', $post['cabang_cross']);

            //Membuat notifikasi tiket baru untuk Admin
            $this->notifikasi->send($id_ticket, 'Tiket Baru');

            // Tambah record ke Form Survey
            $form_survey = ['id_leads' => $id];
            $this->fs_konsumen_model->create($form_survey);

            //Jika CMS mengirim data leads, maka assign form survey otomatis terkirim ke cms tersebut
            if ($this->fungsi->user_login()->level == 1)
                $this->fs_konsumen_model->update(['assign_cms' => $this->fungsi->user_login()->id_user], ['id_leads' => $id]);
        }

        if ($id) {
            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil disimpan. <a href='#'>Lihat Data</a>");

            //Langsung redirect ke halaman form survey
            isset($post['process']) ? redirect('Fs_konsumen/create/' . $id) : redirect('leads');
        }
    }
    //  else {
    //     $data = [
    //         'mappings'  => $this->leads_model->get("status= 'database' AND leads_full." . $this->where),
    //         'branches'  => $this->branch_model->get(),
    //         'users'     => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),

    //         'agents'    => $this->agent_model->get("agents." . $this->where),
    //         'partners'  => $this->partner_model->get("partners_full." . $this->where)
    //     ];
    //     $this->template->load('template/index', 'leads-form', $data);
    // }

    public function save_database()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $this->form_validation->set_rules('telepon', 'Telepon', 'required|is_unique[leads_full.telepon]', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);

        if ($this->form_validation->run() != FALSE) {
            $data = $this->submitted_leads_database();

            //Memasukkan data mapping ke database `leads`
            $data['status'] = 'database';
            $id = $this->leads_model->create($data);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("alert", "<div class='alert alert-success'>Data Leads Database berhasil disimpan.</div>");

            redirect('leads/leads_database');
        } else {
            $data = [
                'agents' => $this->agent_model->get('agents.' . $this->where),
                'partners' => $this->partner_model->get('partners_full.' . $this->where),
            ];
            $this->template->load('template/index', 'leads-mapping-form', $data);
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = $this->submitted_leads_prospect();

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';

            //Menambah antrian ke tiket
            $id_ticket = $this->tiket->tambah_tiket('id_leads', $post['id_leads']);

            //Notifikasi untuk cross branch
            $this->notifikasi->cross_branch($id_ticket, 'Cross Branch oleh', $post['cabang_cross']);

            //Membuat notifikasi tiket baru untuk Admin
            $this->notifikasi->send($id_ticket, 'Tiket Baru');

            // Tambah record ke Form Survey
            $form_survey = ['id_leads' => $post['id_leads']];
            $this->fs_konsumen_model->create($form_survey);

            //Jika CMS mengirim data leads, maka assign form survey otomatis terkirim ke cms tersebut
            if ($this->fungsi->user_login()->level == 1)
                $this->fs_konsumen_model->update(['assign_cms' => $this->fungsi->user_login()->id_user], ['id_leads' => $post['id_leads']]);
        }

        $where = ['id_leads' => $post['id_leads']];
        //Memasukkan data mapping ke database `leads`
        unset($data["created_at"], $data["id_user"], $data["id_branch"]);
        $this->leads_model->update($data, $where);

        //Membuat history activity inputan data leads
        $leads_activity_model = [
            'activity' => 'Perubahan pada data leads',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_leads' => $post['id_leads'],
            'id_user' => $this->fungsi->user_login()->id_user
        ];

        $this->leads_activity_model->create($leads_activity_model);

        //Membuat notifikasi Perubahan Data untuk Admin
        $notification = $this->notification($post['id_ticket'], 'Perubahan Data');
        $this->notification_model->create($notification);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data leads berhasil diupdate. <a href='#'>Lihat Data</a>");

        if (isset($post['draft'])) {
            redirect($post['redirect']);
        } else if (isset($post['process'])) {
            // redirect('leads');

            //Langsung redirect ke halaman form survey
            isset($post['process']) ? redirect('Fs_konsumen/create/' . $post["id_leads"]) : redirect('leads/');
        }
    }

    public function update_ajax()
    {
        $post = $this->input->post(NULL, TRUE);


        $data = $this->submitted_leads_prospect();

        $where = ['id_leads' => $post['id_leads']];
        //Memasukkan data mapping ke database `leads`
        unset($data["created_at"], $data["id_user"], $data["id_branch"]);
        $json = $this->leads_model->update($data, $where);

        echo json_encode($json);
    }

    public function update_database()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = $this->submitted_leads_database();

        $where = ['id_leads' => $post['id_leads']];

        //Memasukkan data mapping ke database `leads`
        unset($data["created_at"], $data["id_user"], $data["id_branch"]);
        $id = $this->leads_model->update($data, $where);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("alert", "<div class='alert alert-success'>Data Leads Database berhasil diupdate.</div>");

        redirect($post['redirect']);
    }

    public function update_detail()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = $this->submitted_leads_prospect();

        $where = ['id_leads' => $post['id_leads']];
        //Memasukkan data mapping ke database `leads`
        unset($data["created_at"], $data["id_user"], $data["id_branch"]);
        $id = $this->leads_model->update($data, $where);

        //Membuat history activity inputan data leads
        $leads_activity_model = [
            'activity' => 'Perubahan pada data leads',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_leads' => $post['id_leads'],
            'id_user' => $this->fungsi->user_login()->id_user
        ];
        $this->leads_activity_model->create($leads_activity_model);

        //Meng-update antrian tiket untuk data Leads
        $this->tiket->update_tiket($post['id_ticket']);

        //Membuat notifikasi Perubahan Data untuk Admin
        $this->notifikasi->send($post['id_ticket'], 'Perubahan Data');

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("alert", "<div class='alert alert-success'>Data Leads Database berhasil diupdate.</div>");

        redirect($post['redirect']);
    }

    public function delete()
    {
        $id = $this->input->post('keyToString');
        echo "Berhasil menghapus data agent id $id";
        return $this->leads_model->delete($id);

        // return 'success';
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

    // public function get_leads($id)
    // {
    //     $where = ['leads.id_leads' => $id];
    //     echo json_encode($this->leads_model->get($where)->row());
    // }

    // Form Valdation
    public function leads_check()
    {
        $post = $this->input->post(NULL, TRUE);

        $count = $this->leads_model->query("SELECT * FROM leads_full WHERE " . $post['column'] . " = " . $post['value'] . " AND id_leads != " . $post['id_leads']);
        echo $count->num_rows();
    }
}
