<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_ihram extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        //Load Modul Product Support Ticket
        $this->load->model('ps_ticket');
        //Load Modul Notifikasi
        $this->load->model('notification_model');
        //Load Modul Comment
        $this->load->model('comment_model');
        //Load Modul Users
        $this->load->model('user_model');

        //Load Modul Product Support
        $this->load->model('product_support_model', 'product_support');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "id_user = $this->fungsi->user_login()->id_user";
        }
        //Jika Sharia Head/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "id_branch = $this->fungsi->user_login()->id_branch";
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
            'nama_konsumen'         => $post['nama_konsumen'],
            'jenis_konsumen'        => $post['jenis_konsumen'],
            'nama_travel'           => $post['nama_travel'],
            'nomor_ktp'             => $post['nomor_ktp'],
            'nama_paket'            => $post['nama_paket'],
            'tanggal_keberangkatan' => $post['tanggal_keberangkatan'],
            'link_paket'            => $post['link_paket'],

            //Timestamp
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            'id_user'               => $this->fungsi->user_login()->id_user,
            'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

        $id = $this->product_support->create('my_ihram', $data);


        // Tiket
        $ps_ticket = [
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'id_my_ihram'   => $id,

            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $id_ps_ticket = $this->ps_ticket->create($ps_ticket);

        // Activity
        $this->activity('Data My Talim telah dibuat', $id_ps_ticket);

        //Notification
        $this->notification($id_ps_ticket, 'Tiket Product Support Baru');
    }

    public function update()
    {
        $post = $this->input->post(null, TRUE);

        $data = [
            'nama_konsumen'         => $post['nama_konsumen'],
            'jenis_konsumen'        => $post['jenis_konsumen'],
            'nama_travel'           => $post['nama_travel'],
            'nomor_ktp'             => $post['nomor_ktp'],
            'nama_paket'            => $post['nama_paket'],
            'tanggal_keberangkatan' => $post['tanggal_keberangkatan'],
            'link_paket'            => $post['link_paket'],

            //Timestamp
            // 'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            // 'id_user'               => $this->fungsi->user_login()->id_user,
            // 'id_branch'             => $this->fungsi->user_login()->id_branch
        ];
        $where = ['id_my_ihram' => $post['id_my_ihram']];
        $id = $this->product_support->update('my_ihram', $data, $where);


        // Tiket
        $ps_ticket = [
            'status'        => 2,
            'date_pending'  => date('Y-m-d H:i:s'),
            // 'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'id_my_ihram'   => $id,

            'id_user'       => $this->fungsi->user_login()->id_user,
            'id_branch'     => $this->fungsi->user_login()->id_branch
        ];
        $where = ['id_ps_ticket' => $post['id_ps_ticket']];
        $id_ps_ticket = $this->ps_ticket->update($ps_ticket, $where);

        // Activity
        $this->activity('Data My Talim telah dirubah', $id_ps_ticket);

        //Notification
        $this->notification($id_ps_ticket, 'Data Tiket Product Support Dirubah');
    }
}