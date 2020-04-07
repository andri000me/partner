<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ps_my_hajat_sewa extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        //Load Modul Product Support Ticket
        $this->load->model('ps_ticket_model', 'ps_ticket');
        //Load Modul Notifikasi
        $this->load->model('notification_model');
        //Load Modul Comment
        $this->load->model('comment_model');
        //Load Modul Users
        $this->load->model('user_model');

        //Load Modul Product Support
        $this->load->model('ps_model');
        //Load Modul Product Support Activity
        $this->load->model('ps_activity_model', 'ps_activity');



        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "id_user = " . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia Head/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "id_branch = " . $this->fungsi->user_login()->id_branch;
        } else {
            $this->where = "1";
        }

        check_not_login();
    }

    //Notification Method
    private function notification($id_ps_ticket, $message)
    {
        $notification = [
            'pengirim'          => $this->fungsi->user_login()->id_user,
            'penerima_cabang'   => 46,
            'type'              => $message,
            'created_at'        => date('Y-m-d H:i:s'),
            'id_ps_ticket'      => $id_ps_ticket
        ];

        return $this->notification_model->create($notification);
    }

    //Activity Method
    private function activity($activity, $id_ps_ticket)
    {
        // Activity
        $ps_activity = [
            'activity' => $activity,
            'date_activity' => date('Y-m-d H:i:s'),
            'id_ps_ticket' => $id_ps_ticket,
            'id_user' => $this->fungsi->user_login()->id_user
        ];
        return $this->ps_activity->create($ps_activity);
    }

    public function index()
    {
    }

    public function create()
    {
    }

    public function edit()
    {
    }

    public function save()
    {
        $post = $this->input->post(null, TRUE);

        $data = [
            'nama_konsumen'             => $post['nama_konsumen'],
            'jenis_konsumen'            => $post['jenis_konsumen'],
            'nama_pemilik'              => $post['nama_pemilik'],
            'jenis_pemilik'             => $post['jenis_pemilik'],
            'hubungan_pemohon'          => $post['hubungan_pemohon'],
            'luas_panjang'              => $post['luas_panjang'],
            'biaya_tahunan'             => $post['biaya_tahunan'],
            'luas_panjang'              => $post['luas_panjang'],
            'biaya_tahunan'             => str_replace(",","", $post['biaya_tahunan']),
            'informasi_tambahan'        => $post['informasi_tambahan_sewa'],

            //Timestamp
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            'id_user'               => $this->fungsi->user_login()->id_user,
            'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

        $data['upload_file'] = $this->upload_file();

        $id = $this->ps_model->create('my_hajat_sewa', $data);

        // Tiket
        $ps_ticket = [
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
            'id_my_hajat_sewa'   => $id,

            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $id_ps_ticket = $this->ps_ticket->create($ps_ticket);

        // Activity
        $this->activity('Data My Hajat Sewa telah dibuat', $id_ps_ticket);

        //Notification
        $this->notification($id_ps_ticket, 'Tiket Product Support Baru');

        redirect('product_support');
    }

    public function update()
    {
        $post = $this->input->post(null, TRUE);

        $data = [
            'nama_konsumen'             => $post['nama_konsumen'],
            'jenis_konsumen'            => $post['jenis_konsumen'],
            'nama_pemilik'              => $post['nama_pemilik'],
            'jenis_pemilik'             => $post['jenis_pemilik'],
            'hubungan_pemohon'          => $post['hubungan_pemohon'],
            'luas_panjang'              => $post['luas_panjang'],
            'biaya_tahunan'             => $post['biaya_tahunan'],
            'luas_panjang'              => $post['luas_panjang'],
            'biaya_tahunan'             => str_replace(",","", $post['biaya_tahunan']),
            'informasi_tambahan'        => $post['informasi_tambahan_sewa'],

            //Timestamp
            // 'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            // 'id_user'               => $this->fungsi->user_login()->id_user,
            // 'id_branch'             => $this->fungsi->user_login()->id_branch
        ];
        $where = ['id_my_hajat_sewa' => $post['id_my_hajat_sewa']];
        $id = $this->ps_model->update('my_hajat_sewa', $data, $where);

        // Tiket
        $ps_ticket = [
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            // 'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'id_my_hajat_sewa'   => $post['id_my_hajat_sewa'],

            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $where = ['id_ps_ticket' => $post['id_ps_ticket']];
        $id_ps_ticket = $this->ps_ticket->update($ps_ticket, $where);

        // Activity
        $this->activity('Data My Hajat Sewa telah dirubah', $id_ps_ticket);

        //Notification
        $this->notification($id_ps_ticket, 'Data Tiket Product Support Dirubah');
    }

    public function upload_file()
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
                $config['upload_path']         = './uploads/my_hajat';
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
        $comma = implode(",", $lampiran_arr);
        return $comma;
    }
}