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
        ];
        $this->template->load('template/index', 'agent-edit', $data);
    }

    public function detail($id)
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

        $this->form_validation->set_rules('email', 'Alamat E-mail', 'is_unique[agents.email]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti alamat e-mail']);
        $this->form_validation->set_rules('telepon', 'Alamat E-mail', 'is_unique[agents.telepon]', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'is_unique[agents.no_ktp]', ['is_unique' => 'Nomor KTP sudah terdaftar, mohon ganti nomor KTP']);
        $this->form_validation->set_rules('no_npwp', 'NPWP', 'is_unique[agents.no_npwp]', ['is_unique' => 'NPWP sudah terdaftar, mohon ganti NPWP']);
        // $this->form_validation->set_rules('rekening_bank', 'Rekening Bank', 'is_unique[agents.rekening_bank]', ['is_unique' => 'Rekening Bank sudah terdaftar, mohon ganti nomor rekening']);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


        if ($this->form_validation->run() != FALSE) {

            $data = [
                'nama_lengkap'              => !empty($post['nama_lengkap']) ? $post['nama_lengkap'] : NULL,
                // 'jenis_kelamin'             =>!empty($post['jenis_kelamin']) ? $post['jenis_kelamin'] : NULL,
                'email'                     => !empty($post['email']) ? $post['email'] : NULL,
                'telepon'                   => !empty($post['telepon']) ? $post['telepon'] : NULL,
                'tanggal_lahir'             => !empty($post['tanggal_lahir']) ? $post['tanggal_lahir'] : NULL,
                'no_ktp'                    => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
                'no_npwp'                   => !empty($post['no_npwp']) ? $post['no_npwp'] : NULL,
                'pekerjaan'                 => !empty($post['pekerjaan']) ? $post['pekerjaan'] : NULL,
                'jenis_pekerjaan'           => !empty($post['jenis_pekerjaan']) ? $post['jenis_pekerjaan'] : NULL,
                'jenis_agent'               => !empty($post['jenis_agent']) ? $post['jenis_agent'] : NULL,
                'status_kepemilikan_rumah'  => !empty($post['status_kepemilikan_rumah']) ? $post['status_kepemilikan_rumah'] : NULL,
                'punya_pinjaman'            => !empty($post['punya_pinjaman']) ? $post['punya_pinjaman'] : NULL,
                'afiliasi_travel'           => !empty($post['afiliasi_travel']) ? $post['afiliasi_travel'] : NULL,
                'agent_konvensional'        => !empty($post['agent_konvensional']) ? $post['agent_konvensional'] : NULL,
                'hubungan_karyawan_bfi'     => !empty($post['hubungan_karyawan_bfi']) ? $post['hubungan_karyawan_bfi'] : NULL,
                'konsumen_bfi'              => !empty($post['konsumen_bfi']) ? $post['konsumen_bfi'] : NULL,
                'income'                    => !empty($post['income']) ? str_replace(",", "", $post['income']) : NULL,
                'rekening_bank'             => !empty($post['rekening_bank']) ? $post['rekening_bank'] : NULL,
                'cabang_bank'               => !empty($post['cabang_bank']) ? $post['cabang_bank'] : NULL,
                'nama_bank'                 => !empty($post['nama_bank']) ? $post['nama_bank'] : NULL,
                'atas_nama'                 => !empty($post['atas_nama']) ? $post['atas_nama'] : NULL,

                //Timestamp
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $post['id_user'],
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $post['id_branch']
            ];

            //Konfigurasi Upload
            $config['upload_path']         = './uploads/agents';
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

            if (!$this->upload->do_upload('npwp')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                $data['npwp'] = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('buku_tabungan')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                $data['buku_tabungan'] = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('foto_selfie')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                $data['foto_selfie'] = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('form_f100')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                $data['form_f100'] = $this->upload->data('file_name');
            }

            if (isset($post['draft'])) {
                $data['status'] = 'draft';
            } else if (isset($post['process'])) {
                $data['status'] = 'lengkap';
            }

            //Memasukkan data ke database `Agents`


            $id = $this->agent_model->create($data);

            if (isset($post['process'])) {
                //Menambah antrian tiket untuk data Agent
                $has_superior = $this->fungsi->user_login()->has_superior;
                $ticket = [
                    'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                    'date_pending'  => date('Y-m-d H:i:s'),
                    'date_created'  => date('Y-m-d H:i:s'),
                    'date_modified'  => date('Y-m-d H:i:s'),
                    'id_agent'      => $id,
                    'id_user'       => $this->fungsi->user_login()->id_user,
                    'id_branch'     => $this->fungsi->user_login()->id_branch
                ];
                $this->ticket_model->create($ticket);
            }
            //Membuat history activity inputan data Agent
            $agent_activity = [
                'activity' => 'Data Agent telah dibuat',
                'date_activity' => date('Y-m-d H:i:s'),
                'id_agent' => $id,
                'id_user' => $post['id_user']
            ];

            $this->agent_activity->create($agent_activity);

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


        $original_value = $this->agent_model->get(['id_agent' => $post['id_agent']])->row();
        $this->form_validation->set_rules('email', 'Alamat E-mail', ($post['email'] != $original_value->email) ? 'is_unique[agents.email]' : '', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti alamat e-mail']);
        $this->form_validation->set_rules('telepon', 'Nomor Telepon', ($post['telepon'] != $original_value->telepon) ? 'is_unique[agents.telepon]' : '', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', ($post['no_ktp'] != $original_value->no_ktp) ? 'is_unique[agents.no_ktp]' : '', ['is_unique' => 'Nomor KTP sudah terdaftar, mohon ganti nomor KTP']);
        $this->form_validation->set_rules('no_npwp', 'NPWP', ($post['no_npwp'] != $original_value->no_npwp) ? 'is_unique[agents.no_npwp]' : '', ['is_unique' => 'NPWP sudah terdaftar, mohon ganti NPWP']);
        // $this->form_validation->set_rules('rekening_bank', 'Rekening Bank', 'is_unique[agents.rekening_bank]', ['is_unique' => 'Rekening Bank sudah terdaftar, mohon ganti nomor rekening']);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $data = [
            'nama_lengkap'              => !empty($post['nama_lengkap']) ? $post['nama_lengkap'] : NULL,
            // 'jenis_kelamin'             => !empty($post['jenis_kelamin']) ? $post['jenis_kelamin'] : NULL,
            'email'                     => !empty($post['email']) ? $post['email'] : NULL,
            'telepon'                   => !empty($post['telepon']) ? $post['telepon'] : NULL,
            'tanggal_lahir'             => !empty($post['tanggal_lahir']) ? $post['tanggal_lahir'] : NULL,
            'no_ktp'                    => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
            'no_npwp'                   => !empty($post['no_npwp']) ? $post['no_npwp'] : NULL,
            'pekerjaan'                 => !empty($post['pekerjaan']) ? $post['pekerjaan'] : NULL,
            'jenis_pekerjaan'           => !empty($post['jenis_pekerjaan']) ? $post['jenis_pekerjaan'] : NULL,
            'jenis_agent'               => !empty($post['jenis_agent']) ? $post['jenis_agent'] : NULL,
            'status_kepemilikan_rumah'  => !empty($post['status_kepemilikan_rumah']) ? $post['status_kepemilikan_rumah'] : NULL,
            'punya_pinjaman'            => !empty($post['punya_pinjaman']) ? $post['punya_pinjaman'] : NULL,
            'afiliasi_travel'           => !empty($post['afiliasi_travel']) ? $post['afiliasi_travel'] : NULL,
            'agent_konvensional'        => !empty($post['agent_konvensional']) ? $post['agent_konvensional'] : NULL,
            'hubungan_karyawan_bfi'     => !empty($post['hubungan_karyawan_bfi']) ? $post['hubungan_karyawan_bfi'] : NULL,
            'konsumen_bfi'              => !empty($post['konsumen_bfi']) ? $post['konsumen_bfi'] : NULL,
            'income'                    => !empty($post['income']) ? str_replace(",", "", $post['income']) : NULL,
            'rekening_bank'             => !empty($post['rekening_bank']) ? $post['rekening_bank'] : NULL,
            'cabang_bank'               => !empty($post['cabang_bank']) ? $post['cabang_bank'] : NULL,
            'nama_bank'                 => !empty($post['nama_bank']) ? $post['nama_bank'] : NULL,
            'atas_nama'                 => !empty($post['atas_nama']) ? $post['atas_nama'] : NULL,

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'             => $post['id_branch']
        ];

        //Konfigurasi Upload
        $config['upload_path']         = './uploads/agents';
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

        if (!$this->upload->do_upload('npwp')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['npwp'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('buku_tabungan')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['buku_tabungan'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('foto_selfie')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['foto_selfie'] = $this->upload->data('file_name');
        }

        if (!$this->upload->do_upload('form_f100')) {
            $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            $data['form_f100'] = $this->upload->data('file_name');
        }

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';

            //Menambah antrian tiket untuk data Agent
            $has_superior = $this->fungsi->user_login()->has_superior;
            $data['status'] = 'lengkap';

            $ticket = [
                'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
                'date_pending'  => date('Y-m-d H:i:s'),
                // 'date_created'  => date('Y-m-d H:i:s'),
                'date_modified'  => date('Y-m-d H:i:s'),
                'id_agent'    => $post['id_agent'],
                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];
            $this->ticket_model->create($ticket);
        }
        $where = ['id_agent' => $post['id_agent']];
        //Memasukkan data ke database `Agents`
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
        $this->session->set_flashdata("berhasil_simpan", "Data Agent berhasil diubah. <a href='#'>Lihat Data</a>");

        redirect('Agent');
    }

    public function update_detail()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama_lengkap'              => !empty($post['nama_lengkap']) ? $post['nama_lengkap'] : NULL,
            // 'jenis_kelamin'             => !empty($post['jenis_kelamin']) ? $post['jenis_kelamin'] : NULL,
            'email'                     => !empty($post['email']) ? $post['email'] : NULL,
            'telepon'                   => !empty($post['telepon']) ? $post['telepon'] : NULL,
            'tanggal_lahir'             => !empty($post['tanggal_lahir']) ? $post['tanggal_lahir'] : NULL,
            'no_ktp'                    => !empty($post['no_ktp']) ? $post['no_ktp'] : NULL,
            'no_npwp'                   => !empty($post['no_npwp']) ? $post['no_npwp'] : NULL,
            'pekerjaan'                 => !empty($post['pekerjaan']) ? $post['pekerjaan'] : NULL,
            'jenis_pekerjaan'           => !empty($post['jenis_pekerjaan']) ? $post['jenis_pekerjaan'] : NULL,
            'jenis_agent'               => !empty($post['jenis_agent']) ? $post['jenis_agent'] : NULL,
            'status_kepemilikan_rumah'  => !empty($post['status_kepemilikan_rumah']) ? $post['status_kepemilikan_rumah'] : NULL,
            'punya_pinjaman'            => !empty($post['punya_pinjaman']) ? $post['punya_pinjaman'] : NULL,
            'afiliasi_travel'           => !empty($post['afiliasi_travel']) ? $post['afiliasi_travel'] : NULL,
            'agent_konvensional'        => !empty($post['agent_konvensional']) ? $post['agent_konvensional'] : NULL,
            'hubungan_karyawan_bfi'     => !empty($post['hubungan_karyawan_bfi']) ? $post['hubungan_karyawan_bfi'] : NULL,
            'konsumen_bfi'              => !empty($post['konsumen_bfi']) ? $post['konsumen_bfi'] : NULL,
            'income'                    => !empty($post['income']) ? str_replace(",", "", $post['income']) : NULL,
            'rekening_bank'             => !empty($post['rekening_bank']) ? $post['rekening_bank'] : NULL,
            'cabang_bank'               => !empty($post['cabang_bank']) ? $post['cabang_bank'] : NULL,
            'nama_bank'                 => !empty($post['nama_bank']) ? $post['nama_bank'] : NULL,
            'atas_nama'                 => !empty($post['atas_nama']) ? $post['atas_nama'] : NULL,

            //Timestamp
            // 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'             => $post['id_branch']
        ];

        $where = ['id_agent' => $post['id_agent']];
        //Memasukkan data mapping ke database `Agents`
        $this->agent_model->update($data, $where);

        //Membuat history activity inputan data Agent
        $agent_activity = [
            'activity' => 'Perubahan pada data Agent',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_agent' => $post['id_agent'],
            'id_user' => $post['id_user']
        ];

        $this->agent_activity->create($agent_activity);

        //Meng-update antrian tiket untuk data Agent
        $has_superior = $this->fungsi->user_login()->has_superior;
        $ticket = [
            'status'        => $has_superior == 0 ? 2 : ($has_superior == 1 ? 1 : ($has_superior == 2 ? 0 : 2)),
            'date_pending'  => date('Y-m-d H:i:s'),
            // 'date_created'  => date('Y-m-d H:i:s'),
            'date_modified'  => date('Y-m-d H:i:s'),
            // 'id_user'       => $this->fungsi->user_login()->id_user,
            // 'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $where_ticket = ['id_ticket' => $post['id_ticket']];
        $this->ticket_model->update($ticket, $where_ticket);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data Agent berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect($post['redirect']);
    }
}
