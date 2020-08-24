<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agent extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();

        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        if ($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['agents.id_branch' => $this->fungsi->user_login()->id_branch];
        } else if ($this->fungsi->user_login()->level == 45) {
            $this->where = "agents.status = 'lengkap' AND tickets.status > 2";
        } else {
            $this->where = "agents.status = 'lengkap'";
        }

        check_not_login();
    }

    private function data()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama_lengkap'              => !empty($post['nama_lengkap'])                ? $post['nama_lengkap'] : '',
            // 'jenis_kelamin'             =>!empty($post['jenis_kelamin'])             ? $post['jenis_kelamin'] : '',
            'email'                     => !empty($post['email'])                       ? $post['email'] : '',
            'telepon'                   => !empty($post['telepon'])                     ? $post['telepon'] : '',
            'tanggal_lahir'             => !empty($post['tanggal_lahir'])               ? $post['tanggal_lahir'] : '',
            'no_ktp'                    => !empty($post['no_ktp'])                      ? $post['no_ktp'] : '',
            'no_npwp'                   => !empty($post['no_npwp'])                     ? $post['no_npwp'] : '',
            'pekerjaan'                 => !empty($post['pekerjaan'])                   ? $post['pekerjaan'] : '',
            'jenis_pekerjaan'           => !empty($post['jenis_pekerjaan'])             ? $post['jenis_pekerjaan'] : '',
            'jenis_agent'               => !empty($post['jenis_agent'])                 ? $post['jenis_agent'] : '',
            'status_kepemilikan_rumah'  => !empty($post['status_kepemilikan_rumah'])    ? $post['status_kepemilikan_rumah'] : '',
            'punya_pinjaman'            => !empty($post['punya_pinjaman'])              ? $post['punya_pinjaman'] : '',
            'afiliasi_travel'           => !empty($post['afiliasi_travel'])             ? $post['afiliasi_travel'] : '',
            'agent_konvensional'        => !empty($post['agent_konvensional'])          ? $post['agent_konvensional'] : '',
            'hubungan_karyawan_bfi'     => !empty($post['hubungan_karyawan_bfi'])       ? $post['hubungan_karyawan_bfi'] : '',
            'konsumen_bfi'              => !empty($post['konsumen_bfi'])                ? $post['konsumen_bfi'] : '',
            'income'                    => !empty($post['income'])                      ? str_replace(",", "", $post['income']) : '',
            'rekening_bank'             => !empty($post['rekening_bank'])               ? $post['rekening_bank'] : '',
            'cabang_bank'               => !empty($post['cabang_bank'])                 ? $post['cabang_bank'] : '',
            'nama_bank'                 => !empty($post['nama_bank'])                   ? $post['nama_bank'] : '',
            'atas_nama'                 => !empty($post['atas_nama'])                   ? $post['atas_nama'] : '',

            //Timestamp
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            'id_user'               => $post['id_user'],
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            'id_branch'             => $post['id_branch']
        ];

        return $data;
    }

    private function lampiran($attachment)
    {
        //Konfigurasi Upload
        $config['upload_path']         = './uploads/agents';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($attachment)) {
            return $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->agent_model->get($this->where, TRUE),
            'users' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch])
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
            'activities' => $this->agent_activity_model->get($where),
            'comments' => $this->comment_model->get($where),
            'ticket' => $this->ticket_model->get($where)->row()
        ];

        $this->template->load('template/index', 'agent-detail', $data);
    }


    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('email', 'Alamat E-mail', 'required|is_unique[agents.email]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti alamat e-mail']);
        $this->form_validation->set_rules('telepon', 'Alamat E-mail', 'required|is_unique[agents.telepon]', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|is_unique[agents.no_ktp]', ['is_unique' => 'Nomor KTP sudah terdaftar, mohon ganti nomor KTP']);
        $this->form_validation->set_rules('no_npwp', 'NPWP', 'required|is_unique[agents.no_npwp]', ['is_unique' => 'NPWP sudah terdaftar, mohon ganti NPWP']);
        $this->form_validation->set_rules('rekening_bank', 'Rekening Bank', 'required|is_unique[agents.rekening_bank]', ['is_unique' => 'Rekening Bank sudah terdaftar, mohon ganti nomor rekening']);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run() != FALSE) {

            $data                   = $this->data();

            $data['ktp']            = $this->lampiran('ktp');
            $data['npwp']           = $this->lampiran('npwp');
            $data['buku_tabungan']  = $this->lampiran('buku_tabungan');
            $data['foto_selfie']    = $this->lampiran('foto_selfie');
            $data['form_f100']      = $this->lampiran('form_f100');

            if (isset($post['draft'])) {
                $data['status'] = 'draft';
            } else if (isset($post['process'])) {
                $data['status'] = 'lengkap';
            }

            //Memasukkan data ke database `Agents`
            $id = $this->agent_model->create($data);

            if (isset($post['process'])) {
                //Menambah antrian tiket untuk data Agent
                $id_ticket = $this->tiket->tambah_tiket('id_agent', $id);

                //Membuat notifikasi tiket baru untuk Admin
                $this->notifikasi->send($id_ticket, 'Tiket Baru', 46);
            }
            //Membuat history activity inputan data Agent
            $agent_activity_model = [
                'activity' => 'Data Agent telah dibuat',
                'date_activity' => date('Y-m-d H:i:s'),
                'id_agent' => $id,
                'id_user' => $post['id_user']
            ];

            $this->agent_activity_model->create($agent_activity_model);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("alert", "<div class='alert alert-success'>Data Agent berhasil disimpan.</div>");

            redirect('Agent');
        } else {
            $this->template->load('template/index', 'agent-form');
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);


        // $original_value = $this->agent_model->get(['id_agent' => $post['id_agent']])->row();
        // $this->form_validation->set_rules('email', 'Alamat E-mail', ($post['email'] != $original_value->email) ? 'is_unique[agents.email]' : '', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti alamat e-mail']);
        // $this->form_validation->set_rules('telepon', 'Nomor Telepon', ($post['telepon'] != $original_value->telepon) ? 'is_unique[agents.telepon]' : '', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);
        // $this->form_validation->set_rules('no_ktp', 'Nomor KTP', ($post['no_ktp'] != $original_value->no_ktp) ? 'is_unique[agents.no_ktp]' : '', ['is_unique' => 'Nomor KTP sudah terdaftar, mohon ganti nomor KTP']);
        // $this->form_validation->set_rules('no_npwp', 'NPWP', ($post['no_npwp'] != $original_value->no_npwp) ? 'is_unique[agents.no_npwp]' : '', ['is_unique' => 'NPWP sudah terdaftar, mohon ganti NPWP']);
        // $this->form_validation->set_rules('rekening_bank', 'Rekening Bank', 'is_unique[agents.rekening_bank]', ['is_unique' => 'Rekening Bank sudah terdaftar, mohon ganti nomor rekening']);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $data = $this->data();
        unset($data['created_at'], $data['id_user'], $data['id_branch']);

        $data['ktp']            = $this->lampiran('ktp');
        $data['npwp']           = $this->lampiran('npwp');
        $data['buku_tabungan']  = $this->lampiran('buku_tabungan');
        $data['foto_selfie']    = $this->lampiran('foto_selfie');
        $data['form_f100']      = $this->lampiran('form_f100');

        if (isset($post['draft'])) {
            $data['status'] = 'draft';
        } else if (isset($post['process'])) {
            $data['status'] = 'lengkap';

            //Menambah antrian tiket untuk data Agent
            $id_ticket = $this->tiket->tambah_tiket('id_agent', $post['id_agent']);

            //Membuat notifikasi tiket baru untuk Admin
            $this->notifikasi->send($id_ticket, 'Tiket Baru', 46);
        }
        $where = ['id_agent' => $post['id_agent']];
        //Memasukkan data ke database `Agents`
        $id = $this->agent_model->update($data, $where);

        //Membuat history activity inputan data Agent
        $agent_activity_model = [
            'activity' => 'Perubahan pada data Agent',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_agent' => $post['id_agent'],
            'id_user' => $this->fungsi->user_login()->id_user
        ];

        $this->agent_activity_model->create($agent_activity_model);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("alert", "<div class='alert alert-success'>Data Agent berhasil diubah.</div>");

        redirect('Agent');
    }

    public function update_detail()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = $this->data();
        unset($data['created_at'], $data['id_user'], $data['id_branch']);

        $where = ['id_agent' => $post['id_agent']];
        //Memasukkan data mapping ke database `Agents`
        $this->agent_model->update($data, $where);

        //Membuat history activity inputan data Agent
        $agent_activity_model = [
            'activity' => 'Perubahan pada data Agent',
            'date_activity' => date('Y-m-d H:i:s'),
            'id_agent' => $post['id_agent'],
            'id_user' => $this->fungsi->user_login()->id_user
        ];

        $this->agent_activity_model->create($agent_activity_model);

        //Membuat notifikasi Perubahan Data untuk Admin
        $this->notifikasi->send($post['id_ticket'], 'Perubahan Data', 46);

        //Meng-update antrian tiket untuk data Agent
        $this->tiket->update_tiket($post['id_ticket']);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("alert", "<div class='alert alert-success'>Data Agent berhasil diupdate.</div>");

        redirect($post['redirect']);
    }

    public function delete()
    {
        $id = $this->input->post('keyToString');
        echo "Berhasil menghapus data agent id $id";
        return $this->agent_model->delete($id);
    }

    public function tambah_lampiran()
    {

        $post = $this->input->post(NULL, TRUE);

        $data = [];

        $lampiran_arr = [];

        //Count total file
        $countfiles = count($_FILES['tambah_lampiran']['name']);

        //Looping all files
        for ($i = 0; $i < $countfiles; $i++) {
            if (!empty($_FILES['tambah_lampiran']['name'][$i])) {
                $_FILES['file']['name'] = $_FILES['tambah_lampiran']['name'][$i];
                $_FILES['file']['type'] = $_FILES['tambah_lampiran']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['tambah_lampiran']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['tambah_lampiran']['error'][$i];
                $_FILES['file']['size'] = $_FILES['tambah_lampiran']['size'][$i];



                //Konfigurasi Upload
                $config['upload_path']         = './uploads/agents';
                $config['allowed_types']        = '*';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                // $config['file_name']            = $_FILES['tambah_lampiran']['name'][$i]; 

                // Load upload library
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];


                    // Initialize array
                    $data['filenames'][] = $filename;

                    $lampiran_arr[] = $filename;
                }
            }
        }



        $where = "agents.id_agent = " .  $post['id_agent'];
        //Mengambil nama file lampiran tambahan yang ada
        $lampiran_tambahan = $this->agent_model->get($where)->row()->lampiran_tambahan;
        //Konversi nama file dari array ke string
        $comma = implode(",", $lampiran_arr);
        //Jika sudah pernah melampirkan tambahan, maka append nama file di database
        if ($lampiran_tambahan) {
            $data_agent['lampiran_tambahan'] = $lampiran_tambahan . "," . $comma;
            $this->agent_model->update($data_agent, $where);
        } else {
            $data_agent['lampiran_tambahan'] = $comma;
            $this->agent_model->update($data_agent, $where);
        }

        redirect($post['redirect']);
    }

    //Upload Formulir MOU
    public function upload_mou()
    {
        //Konfigurasi Upload
        $config['upload_path']         = './uploads/agents';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('upload_mou')) {
            echo $this->upload->display_errors();
        } else {
            $data_ticket = [
                'date_verified_ttd' =>  date('Y-m-d H:i:s'),
                'verified_by'       => $this->fungsi->user_login()->id_user
            ];
            $where = ['id_agent' => $this->input->post('id_agent')];
            $this->ticket_model->update($data_ticket, $where);
            $data['form_mou'] = $this->upload->data('file_name');
            $this->agent_model->update($data, $where);

            //Jika data tiket sudah diapprove namun belum di upload form pks, maka ketika user upload form mou, tiket kembali ke status `pending`
            $id_agent = $this->ticket_model->get(['tickets.id_agent' => $this->input->post('id_agent')])->row();
            if ($id_agent->status_ticket == 5 || $id_agent->status_ticket == 6) {
                $data_ticket = ['status' => 2];
                $this->ticket_model->update($data_ticket, ['id_agent' => $this->input->post('id_agent')]);
            }

            redirect($this->input->post('redirect'));
        }
    }

    //Download Lampiran
    public function download_lampiran($id)
    {

        $where = ['agents.id_agent' => $id];
        $data = $this->agent_model->get($where)->row();
        $data_tiket = $this->ticket_model->get($where)->row();
        $uploads = [
            $data->ktp,
            $data->npwp,
            $data->buku_tabungan,
            $data->foto_selfie,
            $data->form_f100,

            //form mou
            $data_tiket->form_mou
        ];

        // $uploads[] = $data_tiket->form_f100;

        foreach ($uploads as $upload => $file) {
            if ($file != NULL || $file != '') {
                ${'upload' . $upload} =  FCPATH . 'uploads/agents/' . $file;
                $this->zip->read_file(${"upload" . $upload});
            }
            // echo $upload . $file . '<br>';
        }

        //Download Data lampiran tambahan
        $lampiran_tambahan =  explode(",", $data->lampiran_tambahan);
        foreach ($lampiran_tambahan as $file) {
            if ($file != NULL || $file != '') {
                ${'upload' . $upload} =  FCPATH . 'uploads/agents/' . $file;
                $this->zip->read_file(${"upload" . $upload});
                // echo $file . '<br>';
            }
        }
        // Download
        $nama_lengkap = str_replace(" ", "_", $data->nama_lengkap);
        $filename = $nama_lengkap . "_$data->id_agent.zip";
        $this->zip->download($filename);
    }
}
