<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ps_my_cars extends CI_Controller
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
        $this->load->model('partner_model');

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

    public function edit($id)
    {
        $where = ['ps_my_cars.id_my_cars' => $id];
        $id_ps_ticket = $this->ps_ticket->get($where)->row()->id_ps_ticket;
        $data = [
            'data' => $this->ps_model->get("my_cars", $where)->row(),
            'ticket' => $this->ps_ticket->get($where)->row(),
            'activities' => $this->ps_activity->get("ps_tickets.id_ps_ticket = $id_ps_ticket"),
            'comments'      => $this->comment_model->get("ps_tickets.id_ps_ticket = $id_ps_ticket"),

            'partners'      => $this->partner_model->get_mapping($this->where)
        ];
        $this->template->load('template/index', 'product_support/input-produk-detail-cars', $data);
    }

    public function save()
    {
        $post = $this->input->post(null, TRUE);

        $data = [
            'nama_konsumen'                 => $post['nama_konsumen'],
            'jenis_konsumen'                => $post['jenis_konsumen'],
            'nama_penyedia'                 => $post['nama_penyedia_mycars'],
            'jenis_penyedia'                => $post['jenis_penyedia_mycars'],
            'kategori_penyedia'                => $post['kategori_penyedia_mycars'],
            'kategori_aset'                 => $post['kategori_aset'],
            'lama_usaha'                    => $post['lama_usaha_mycars'],
            'kepemilikan_tempat'            => $post['kepemilikan_tempat'],
            'jumlah_stok'                   => $post['jumlah_stok'],
            'tipe_kendaraan'                => $post['tipe_kendaraan'],
            // 'jenis_kendaraan'               => $post['jenis_kendaraan'],
            'tahun'                         => $post['tahun'],
            'warna_kendaraan'               => $post['warna_kendaraan'],
            'nilai_pembiayaan'              => $post['nilai_pembiayaan_mycars'],
            'informasi_tambahan'            => $post['informasi_tambahan_mycars'],

            'created_at'                    => date('Y-m-d H:i:s'),
            'updated_at'                   => date('Y-m-d H:i:s'),

            'id_user'               => $this->fungsi->user_login()->id_user,
            'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

        $data['upload_file'] = $this->tambah_lampiran();

        $id = $this->ps_model->create('my_cars', $data);

        // Tiket
        $ps_ticket = [
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
            'id_my_cars'   => $id,

            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $id_ps_ticket = $this->ps_ticket->create($ps_ticket);

        // Activity
        $this->activity('Data My Cars telah dibuat', $id_ps_ticket);

        //Notification
        $this->notification($id_ps_ticket, 'Tiket Product Support Baru');

        redirect('product_support');
    }

    public function update()
    {
        $post = $this->input->post(null, TRUE);

        $data = [
            'nama_konsumen'                 => $post['nama_konsumen'],
            'jenis_konsumen'                => $post['jenis_konsumen'],
            'nama_penyedia'                 => $post['nama_penyedia'],
            'jenis_penyedia'                => $post['jenis_penyedia'],
            'kategori_aset'                 => $post['kategori_aset'],
            'lama_usaha'                    => $post['lama_usaha'],
            'kepemilikan_tempat'            => $post['kepemilikan_tempat'],
            'jumlah_stok'                   => $post['jumlah_stok'],
            'tipe_kendaraan'                => $post['tipe_kendaraan'],
            // 'jenis_kendaraan'               => $post['jenis_kendaraan'],
            'tahun'                         => $post['tahun'],
            'warna_kendaraan'               => $post['warna_kendaraan'],
            'nilai_pembiayaan'              => $post['nilai_pembiayaan'],
            'informasi_tambahan'            => $post['informasi_tambahan'],

            // 'created_at'                    => date('Y-m-d H:i:s'),
            'updated_at'                   => date('Y-m-d H:i:s'),

            // 'id_user'               => $this->fungsi->user_login()->id_user,
            // 'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

        $where = ['id_my_cars' => $post['id_my_cars']];
        $id = $this->ps_model->update('my_cars', $data, $where);

        // Tiket
        $ps_ticket = [
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            // 'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'id_my_cars'   => $post['id_my_cars'],

            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $where = ['id_ps_ticket' => $post['id_ps_ticket']];
        $id_ps_ticket = $this->ps_ticket->update($ps_ticket, $where);

        // Activity
        $this->activity('Data My Cars telah dirubah', $post['id_ps_ticket']);

        //Notification
        $this->notification($post['id_ps_ticket'], 'Data Tiket Product Support Dirubah');
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
                $config['upload_path']         = './uploads/my_cars';
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