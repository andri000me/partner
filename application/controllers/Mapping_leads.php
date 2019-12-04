<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_leads extends CI_Controller
{
    public $where;


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mapping_leads_model', 'mapping_leads');
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
            'data' => $this->mapping_leads->get($this->where)
        ];

        $this->template->load('template/index', 'leads-mapping', $data);
    }

    public function create()
    {
        $this->template->load('template/index', 'leads-mapping-form');
    }

    public function edit($id)
    {
        $data = [
            'data' => $this->mapping_leads->get(['A.id_mapping_leads' => $id])->row()
        ];
        $this->template->load('template/index', 'leads-mapping-edit', $data);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $this->form_validation->set_rules('telepon', 'Telepon', 'required|is_unique[mapping_leads.telepon]', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'nama_konsumen'         => $post['nama_konsumen'],
                'telepon'               => $post['telepon'],
                'soa'                   => $post['soa'],
                'produk'                => $post['produk'],
                'detail_produk'         => $post['detail_produk'],

                //Timestamp
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $this->fungsi->user_login()->id_user,
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $this->fungsi->user_login()->id_branch
            ];

            //Memasukkan data mapping ke database `leadss`
            $id = $this->mapping_leads->create($data);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping Leads berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Mapping_leads');
        } else {
            $this->template->load('template/index', 'leads-mapping-form');
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

            $data = [
                'nama_konsumen'         => $post['nama_konsumen'],
                'telepon'               => $post['telepon'],
                'soa'                   => $post['soa'],
                'produk'                => $post['produk'],
                'detail_produk'         => $post['detail_produk'],

                //Timestamp
                // 'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $this->fungsi->user_login()->id_user,
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $this->fungsi->user_login()->id_branch
            ];

            $where = ['id_mapping_leads' => $post['id_mapping_leads']];

            //Memasukkan data mapping ke database `leadss`
            $id = $this->mapping_leads->update($data, $where);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping Leads berhasil diupdate. <a href='#'>Lihat Data</a>");

            redirect('Mapping_leads');
    }
}
