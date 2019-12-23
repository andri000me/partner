<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_partner extends CI_Controller
{
    public $where;


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mapping_partner_model', 'mapping_partner');
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
            'data' => $this->mapping_partner->get($this->where)
        ];

        $this->template->load('template/index', 'mapping', $data);
    }

    public function create()
    {
        $this->template->load('template/index', 'mapping-form');
    }

    public function edit($id)
    {
        $data = [
            'data' => $this->mapping_partner->get(['A.id_mapping' => $id])->row()
        ];
        $this->template->load('template/index', 'mapping-edit', $data);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required');
        $this->form_validation->set_rules('bidang_usaha', 'Bidang Usaha', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|is_unique[mapping_partners.telepon]', ['is_unique' => 'Nomor telepon sudah terdaftar, mohon ganti nomor telepon']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[mapping_partners.email]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti Alamat E-mail']);
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'nama_usaha'            => $post['nama_usaha'],
                'bidang_usaha'          => $post['bidang_usaha'],
                'bentuk_usaha'          => $post['bentuk_usaha'],
                'alamat'                => $post['alamat'],
                'telepon'               => $post['telepon'],
                'email'                 => $post['email'],
                'kategori_produk'       => $post['kategori_produk'],
                'catatan'               => $post['catatan'],

                //Timestamp
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $post['id_user'],
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $post['id_branch']
            ];

            //Konfigurasi Upload
            $config['upload_path']         = './uploads/partners';
            $config['allowed_types']        = '*';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_usaha_mapping')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                $data['foto_usaha_mapping'] = $this->upload->data('file_name');
            }

            //Memasukkan data mapping ke database `partners`
            $id = $this->mapping_partner->create($data);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Mapping_partner');
        } else {
            $this->template->load('template/index', 'mapping-form');
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required');
        $this->form_validation->set_rules('bidang_usaha', 'Bidang Usaha', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'nama_usaha'            => $post['nama_usaha'],
                'bidang_usaha'          => $post['bidang_usaha'],
                'bentuk_usaha'          => $post['bentuk_usaha'],
                'alamat'                => $post['alamat'],
                'telepon'               => $post['telepon'],
                'email'                 => $post['email'],
                'kategori_produk'       => $post['kategori_produk'],
                'catatan'               => $post['catatan'],

                //Timestamp
                // 'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                // 'id_user'               => $post['id_user'],
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                // 'id_branch'             => $post['id_branch']
            ];

            //Konfigurasi Upload
            $config['upload_path']         = './uploads/partners';
            $config['allowed_types']        = '*';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_usaha_mapping')) {
                $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                $data['foto_usaha_mapping'] = $this->upload->data('file_name');
            }

            $where = ['id_mapping' => $post['id_mapping']];

            //Memasukkan data mapping ke database `partners`
            $id = $this->mapping_partner->update($data, $where);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil diupdate. <a href='#'>Lihat Data</a>");

            redirect('Mapping_partner');
        } else {
            $data = [
                'data' => $this->mapping_partner->get(['A.id_mapping' => $post['id_mapping']])->row()
            ];
            $this->template->load('template/index', 'mapping-edit', $data);
        }
    }
}
