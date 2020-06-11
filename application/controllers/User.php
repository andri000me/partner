<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();

        check_not_login();
    }

    public function index()
    {
        $data = [
            'users' => $this->user_model->get_all(),
            'branches' => $this->branch_model->get(),
            'module' => $this->module_model->get()
        ];

        $this->template->load('template/index', 'user', $data);
    }

    public function list_karyawan()
    {
        $data = [
            'data' => $this->user_model->get($this->fungsi->user_login()->nik)->row(),
            'users' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),
            'branches' => $this->branch_model->get()
        ];
        $this->template->load('template/index', 'list-karyawan', $data);
    }

    // Halaman Daftar Akun
    public function create()
    {
        $data['branches'] = $this->branch_model->get();
        $this->template->load('template/index', 'register', $data);
    }

    // Hapus akun
    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_model->del($id);
        redirect('user');
    }

    //method proses pendaftaran akun user
    public function save()
    {
        $post = $this->input->post(null, TRUE);

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text text-danger">', '</div>');

        $this->form_validation->set_rules('nik', 'NIK', 'trim|required|min_length[6]|max_length[7]|is_unique[users.nik]', ['is_unique' => 'NIK sudah dipakai']);
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'trim|required', ['required' => 'Nama Lengkap Wajib diisi']);
        // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', ['is_unique' => 'Email sudah dipakai']);
        // $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]', ['required' => 'Kata Sandi Wajib diisi']);
        // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]', ['matches' => 'Konfirmasi Kata Sandi wajib sama', 'required' => 'Konfirmasi Kata Sandi wajib diisi']);
        $this->form_validation->set_rules('id_branch', 'ID Cabang', 'trim|required', ['required' => 'Cabang Wajib diisi']);

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'name'         => $post['name'],
                'nik'         => $post['nik'],
                // 'email'     => $post['email'],
                'password'     => md5('bfisyariah'),
                'id_branch' => $post['id_branch'],
                'level'     => $post['jabatan'],
                'jabatan'   => $post['jabatan'] == '1' ? 'CMS' : ($post['jabatan'] == '2' ? 'Sharia Head' : ($post['jabatan'] == '3' ? 'Sharia Manager' : ($post['jabatan'] == '4' ? 'Admin HO' : ($post['jabatan'] == '5' ? 'Head HO' : '')))),
                'is_active' => 1
            ];

            //process daftar akun user
            $id_user = $this->user_model->add($data);
            $this->session->set_flashdata("berhasil_register", "<div class='text text-success'>Berhasil daftar, silahkan login.</div>");

            $data_modul = [
                'branch_active' => isset($post['branch_active']) ? 1 : 0,
                'user_active' => isset($post['user_active']) ? 1 : 0,
                'leads_active' => isset($post['leads_active']) ? 1 : 0,
                'product_active' => isset($post['product_support_active']) ? 1 : 0,
                'nst_active' => isset($post['nst_active']) ? 1 : 0,
                'assignment_active' => isset($post['assignment_active']) ? 1 : 0,
                'transfer_active' => isset($post['transfer_data_active']) ? 1 : 0,
                'kerjasama_active' => isset($post['kerjasama_active']) ? 1 : 0,
                'approval_bonus_active' => isset($post['approval_bonus_active']) ? 1 : 0,
                'ticket_active' => isset($post['ticket_active']) ? 1 : 0,
                'admin_active' => isset($post['admin_active']) ? 1 : 0,
                'id_user' => $id_user
            ];

            $this->module_model->create($data_modul);

            redirect('user');
        } else {
            $data['branches'] = $this->branch_model->get();
            $this->template->load('template/index', 'register', $data);
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nik'       => $post['nik'],
            'name'      => $post['name'],
            // 'email'     => $post['email'],
            'level'     => $post['jabatan'],
            'jabatan'   => $post['jabatan'] == '1' ? 'CMS' : ($post['jabatan'] == '2' ? 'Sharia Head' : ($post['jabatan'] == '3' ? 'Sharia Manager' : ($post['jabatan'] == '4' ? 'Admin HO' : ($post['jabatan'] == '5' ? 'Head HO' : '')))),
            'id_branch'    => $post['id_branch'],
            'is_active' => $post['is_active'],
        ];
        $where = ['id_user' => $post['id_user']];

        $this->user_model->update($data, $where);

        $data_modul = [
            'branch_active' => isset($post['branch_active']) ? 1 : 0,
            'user_active' => isset($post['user_active']) ? 1 : 0,
            'leads_active' => isset($post['leads_active']) ? 1 : 0,
            'product_active' => isset($post['product_support_active']) ? 1 : 0,
            'nst_active' => isset($post['nst_active']) ? 1 : 0,
            'assignment_active' => isset($post['assignment_active']) ? 1 : 0,
            'transfer_active' => isset($post['transfer_data_active']) ? 1 : 0,
            'kerjasama_active' => isset($post['kerjasama_active']) ? 1 : 0,
            'approval_bonus_active' => isset($post['approval_bonus_active']) ? 1 : 0,
            'ticket_active' => isset($post['ticket_active']) ? 1 : 0,
            'admin_active' => isset($post['admin_active']) ? 1 : 0
        ];

        $this->module_model->update($data_modul, $where);

        // $login_log = [
        //     'login_date' => date('Y-m-d H:i:s'),
        //     'id_user' =>  $post['id_user'],
        //     'keterangan' => 'aktivasi'
        // ];
        // $this->user_model->login_log($login_log);

        redirect('user');
        // $this->template->load('template/index', 'transfer-proses', $data);
    }

    ////// Custom Method

    //method reset password otomatis ke 'bfisyariah'
    public function reset_password()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'password' => md5('bfisyariah')
        ];

        $where = [
            'id_user' => $post['id_user']
        ];

        echo json_encode($this->user_model->update($data, $where));

        // redirect('user');
    }


    public function get_module($id_user)
    {
        $post = $this->input->post(NULL, TRUE);

        $where = ['id_user' => $id_user];
        $data = $this->module_model->get($where)->row();

        echo json_encode($data);
    }
}
