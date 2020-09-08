<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approval_bonus extends CI_Controller
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
            $this->where = " IS NOT NULL";
        }

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
        if ($this->fungsi->user_login()->level == 1)
            $data['data'] = $this->approval_bonus_model->get("id_user = " . $this->fungsi->user_login()->id_user);
        if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3)
            $data['data'] = $this->approval_bonus_model->get("id_branch = " . $this->fungsi->user_login()->id_branch);
        if ($this->fungsi->user_login()->level > 3)
            $data['data'] = $this->approval_bonus_model->get();
        $this->template->load('template/index', 'approval-bonus', $data);
    }

    public function create()
    {

        $data['data'] = $this->fs_konsumen_model->get("tickets.status = 6 AND status_kontrak = 'Live' AND fs_konsumen.leads_id IS NOT NULL");

        $this->template->load('template/index', 'approval-bonus-form', $data);
    }

    public function edit($id)
    {
        $where = ["approval_bonuses.id_approval_bonus" => $id];

        $data = [
            'data' => $this->approval_bonus_model->get($where)->row(),
            'fs_konsumen' => $this->fs_konsumen_model->get("tickets.status = 6 AND status_kontrak = 'Live' AND fs_konsumen.leads_id IS NOT NULL"),
            'ticket' => $this->ticket_model->get($where)->row()
        ];

        $this->template->load('template/index', 'approval-bonus-edit', $data);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $this->form_validation->set_rules('leads_id', 'Leads ID', 'required|is_unique[approval_bonuses.leads_id]', ['is_unique' => 'Leads ID sudah terdaftar, mohon ganti Leads ID']);

        if ($this->form_validation->run() != FALSE) {

            $data = [
                'leads_id'              => $post['leads_id'],
                'requester'             => $post['requester'],
                'cabang'                => $post['cabang'],
                'nama_konsumen'         => $post['nama_konsumen'],
                'tanggal_dibuat'        => $post['tanggal_dibuat'],
                'produk'                => $post['produk'],
                'sumber_lead'           => $post['sumber_lead'],
                // 'nama_pemberi_lead'     => $post['nama_pemberi_lead'],
                'nomor_kontrak'         => $post['nomor_kontrak'],
                'nomor_rekening'        => $post['nomor_rekening'],
                'atas_nama'             => $post['atas_nama'],
                'nama_bank'             => $post['nama_bank'],
                'npwp'                  => $post['npwp'],

                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),

                'id_user'               => $this->fungsi->user_login()->id_user,
                'id_branch'             => $this->fungsi->user_login()->id_branch
            ];

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
                    $config['upload_path']         = './uploads/approval_bonuses';
                    $config['allowed_types']        = '*';
                    $config['max_size']             = 0;
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;

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

            //Konversi nama file dari array ke string
            $comma = implode(",", $lampiran_arr);
            $data['upload_file'] = $comma;

            $id = $this->approval_bonus_model->create($data);

            //Menambah antrian tiket untuk data Approval Bonus
            //Menambah ke antrian tiket
            $id_ticket = $this->tiket->tambah_tiket('id_approval_bonus', $id, 2);

            //Membuat notifikasi tiket baru untuk Admin
            $this->notifikasi->send($id_ticket, 'Tiket Baru', 46);

            redirect('approval_bonus');
        } else {
            $data['data'] = $this->fs_konsumen_model->get("tickets.status = 6 AND status_kontrak = 'Live' AND fs_konsumen.leads_id IS NOT NULL");

            $this->template->load('template/index', 'approval-bonus-form', $data);
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'leads_id'              => $post['leads_id'],
            'requester'             => $post['requester'],
            'cabang'                => $post['cabang'],
            'nama_konsumen'         => $post['nama_konsumen'],
            'tanggal_dibuat'        => $post['tanggal_dibuat'],
            'produk'                => $post['produk'],
            'sumber_lead'           => $post['sumber_lead'],
            // 'nama_pemberi_lead'     => $post['nama_pemberi_lead'],
            'nomor_kontrak'         => $post['nomor_kontrak'],
            'nomor_rekening'        => $post['nomor_rekening'],
            'atas_nama'             => $post['atas_nama'],
            'nama_bank'             => $post['nama_bank'],
            'npwp'                  => $post['npwp'],

            // 'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'         => date('Y-m-d H:i:s')

            // 'id_user'               => $this->fungsi->user_login()->id_user,
            // 'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

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
                $config['upload_path']         = './uploads/approval_bonuses';
                $config['allowed_types']        = '*';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

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

        $where = ['leads_id' => $post['leads_id']];

        //Mengambil nama file lampiran tambahan yang ada
        $upload_file = $this->approval_bonus_model->get($where)->row()->upload_file;
        //Konversi nama file dari array ke string
        $comma = implode(",", $lampiran_arr);
        //Jika sudah pernah melampirkan tambahan, maka append nama file di database
        if ($upload_file) {
            $data['upload_file'] = $upload_file . "," . $comma;
        } else {
            $data['upload_file'] = $comma;
        }

        $id = $this->approval_bonus_model->update($data, $where);

        //Membuat notifikasi Perubahan Data untuk Admin
        $notification = $this->notification($post['id_ticket'], 'Perubahan Data');
        $this->notification_model->create($notification);

        redirect('approval_bonus_model');
    }
}
