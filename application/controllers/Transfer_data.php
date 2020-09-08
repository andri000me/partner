<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transfer_data extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();

        check_not_login();

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = 'users.id_user = ' . $this->fungsi->user_login()->id_user;
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = 'branches.id_branch = ' . $this->fungsi->user_login()->id_branch;
        } else {
            $this->where = "1";
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),
            'branches' => $this->branch_model->get()
        ];

        $this->template->load('template/index', 'transfer-data', $data);
    }

    public function create()
    {
        $data = [
            'users' => $this->user_model->get_all(['users.id_branch' => $this->fungsi->user_login()->id_branch]),

            'agent' => $this->agent_model->query(
                "SELECT *, agents.id_user as user_id 
                FROM agents
                INNER JOIN users ON users.id_user = agents.id_user
                INNER JOIN branches ON branches.id_branch = agents.id_branch
                WHERE $this->where
                ORDER BY agents.id_user ASC
            "
            ),

            'mapping_partner' => $this->partner_model->query(
                "SELECT * , partners_full.id_partner as mapping_id_partner, partners_full.id_user as user_id 
                FROM partners_full
                INNER JOIN users ON users.id_user = partners_full.id_user
                INNER JOIN branches ON branches.id_branch = partners_full.id_branch
                WHERE $this->where AND status = 'mapping'
                ORDER BY partners_full.id_user ASC
            "
            ),

            'partner' => $this->partner_model->query(
                "SELECT *, partners_full.id_partner as mapping_id_partner, partners_full.id_user as user_id 
                FROM partners_full
                INNER JOIN users ON users.id_user = partners_full.id_user
                INNER JOIN branches ON branches.id_branch = partners_full.id_branch
                WHERE $this->where AND (status = 'draft' OR status = 'lengkap')
                ORDER BY partners_full.id_user ASC
            "
            ),

            'mapping_leads' => $this->leads_model->query(
                "SELECT *, leads_full.id_leads as mapping_id_leads, leads_full.id_user as user_id 
                FROM leads_full
                INNER JOIN users ON users.id_user = leads_full.id_user
                INNER JOIN branches ON branches.id_branch = leads_full.id_branch
                WHERE $this->where AND leads_full.status = 'database' 
                ORDER BY leads_full.id_user ASC
            "
            ),

            'leads' => $this->leads_model->query(
                "SELECT *, leads_full.id_leads as mapping_id_leads, leads_full.id_user as user_id 
                FROM leads_full
                INNER JOIN users ON users.id_user = leads_full.id_user
                INNER JOIN branches ON branches.id_branch = leads_full.id_branch
                WHERE $this->where
                ORDER BY leads_full.id_user ASC
            "
            )
        ];

        $this->template->load('template/index', 'transfer-proses', $data);
    }

    // transfer semua data
    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $where = ['id_user' => $post['transfer_from']];
        $data = ['id_user' => $post['transfer_to']];

        $update_agent = $this->agent_model->update($data, $where);
        $update_leads = $this->leads_model->update($data, $where);
        $update_partner = $this->partner_model->update($data, $where);

        redirect('transfer_data');
    }

    public function update_transfer()
    {
        $post = $this->input->post(NULL, TRUE);

        $leads = $post['leads_transfer'];
        $partner = $post['partner_transfer'];
        $agent = $post['agent_transfer'];

        foreach ($leads as $key => $val) {
            $this->leads_model->update(['id_user' => $val], ['id_leads' => $key]);
        }

        foreach ($partner as $key => $val) {
            $this->partner_model->update(['id_user' => $val], ['id_partner' => $key]);
        }

        foreach ($agent as $key => $val) {
            $this->agent_model->update(['id_user' => $val], ['id_agent' => $key]);
        }

        redirect('transfer_data');
    }

    public function update_agent()
    {
        $post = $this->input->post(NULL, TRUE);

        $where_data = ['id_agent' => $post['data']];
        $data = ['id_user' => $post['penginput']];
        $id = $this->agent_model->update($data, $where_data);


        echo json_encode($id);
    }

    public function update_leads()
    {
        $post = $this->input->post(NULL, TRUE);

        $where_data = ['id_leads' => $post['data']];
        $data = ['id_user' => $post['penginput']];
        $id = $this->leads_model->update($data, $where_data);


        echo json_encode($id);
    }

    public function update_partner()
    {
        $post = $this->input->post(NULL, TRUE);

        $where_data = ['id_partner' => $post['data']];
        $data = ['id_user' => $post['penginput']];
        $id = $this->partner_model->update($data, $where_data);

        echo json_encode($id);
    }
}
