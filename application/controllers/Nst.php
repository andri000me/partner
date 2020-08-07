<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nst extends CI_Controller
{
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
            $this->where = "IS NOT NULL";
        }

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->nst_model->get("nst." . $this->where)
        ];
        $this->template->load('template/index', 'nst', $data);
    }

    public function create()
    {

        $data = [
            'data' => $this->fs_konsumen_model->get("tickets.status = 5 AND leads_full.$this->where")
        ];
        $this->template->load('template/index', 'nst-form', $data);
    }

    public function edit($id)
    {
        $where = ["nst.id_nst" => $id];

        $data = [
            'data'      => $this->nst_model->get($where)->row(),
            'ticket'    => $this->ticket_model->get(['nst.id_nst' => $id])->row()
        ];
        $this->template->load('template/index', 'nst-edit', $data);
        // echo json_encode($this->nst_model->query($get_leads)->row());
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('leads_id', 'Leads ID', 'required|is_unique[nst.leads_id]', ['is_unique' => 'Leads ID sudah terdaftar, mohon ganti Leads ID']);
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run() != FALSE) {
            $data_nst = [
                'leads_id'      => $post['leads_id'],

                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

                'id_user'       => $this->fungsi->user_login()->id_user,
                'id_branch'     => $this->fungsi->user_login()->id_branch
            ];

            $post = $this->input->post(NULL, TRUE);

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
                    $config['upload_path']         = './uploads/nst';
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
            $data_nst['upload_file'] = $comma;

            $id = $this->nst_model->create($data_nst);

            //Menambah ke antrian tiket
            $this->tiket->tambah_tiket('id_nst', $id);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data NST berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('nst');
        } else {
            $data = [
                'data' => $this->fs_konsumen_model->get("tickets.status = 5")
            ];
            $this->template->load('template/index', 'nst-form', $data);
        }
    }

    public function update()
    {
        //
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
                $config['upload_path']         = './uploads/nst';
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

        $where = "nst.id_nst = " .  $post['id_nst'];
        //Mengambil nama file lampiran tambahan yang ada
        $upload_file = $this->nst_model->get($where)->row()->upload_file;
        //Konversi nama file dari array ke string
        $comma = implode(",", $lampiran_arr);
        //Jika sudah pernah melampirkan tambahan, maka append nama file di database
        if ($upload_file) {
            $data['upload_file'] = $upload_file . "," . $comma;
            $this->nst_model->update($data, $where);
        } else {
            $data['upload_file'] = $comma;
            $this->nst_model->update($data, $where);
        }

        $this->session->set_flashdata("alert", "<div class='alert alert-success' role='alert'>Data Lampiran berhasil ditambah</div>");
        redirect($post['redirect']);
    }
}
