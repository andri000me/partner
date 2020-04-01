<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transfer_data extends CI_Controller
{
    public $where;

    public function __construct()
    {
        parent::__construct();
        //Load Modul Branch
        $this->load->model('branch_model');

        //Load Modul User
        $this->load->model('user_model');

        // Load Modul Agent
        $this->load->model('agent_model');

        // Load Modul Mapping Partner
        $this->load->model('mapping_partner_model', 'mapping_partner');

        // Load Modul Partner
        $this->load->model('partner_model');

        // Load Modul Mapping Leads
        $this->load->model('mapping_leads_model', 'mapping_leads');

        // Load Modul Leads
        $this->load->model('leads_model');

        $this->load->library('form_validation');
        $this->load->helper('fungsi');

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

            'mapping_partner' => $this->mapping_partner->query(
                "SELECT * , mapping_partners.id_mapping as mapping_id_partner, mapping_partners.id_user as user_id 
                FROM mapping_partners
                LEFT JOIN partners ON partners.id_mapping = mapping_partners.id_mapping
                INNER JOIN users ON users.id_user = mapping_partners.id_user
                INNER JOIN branches ON branches.id_branch = mapping_partners.id_branch
                WHERE $this->where AND partners.id_mapping IS NULL
                ORDER BY mapping_partners.id_user ASC
            "
            ),

            'partner' => $this->partner_model->query(
                "SELECT *, mapping_partners.id_mapping as mapping_id_partner, mapping_partners.id_user as user_id 
                FROM partners
                INNER JOIN mapping_partners ON mapping_partners.id_mapping = partners.id_mapping
                INNER JOIN users ON users.id_user = mapping_partners.id_user
                INNER JOIN branches ON branches.id_branch = mapping_partners.id_branch
                WHERE $this->where
                ORDER BY mapping_partners.id_user ASC
            "
            ),

            'mapping_leads' => $this->mapping_leads->query(
                "SELECT *, mapping_leads.id_mapping_leads as mapping_id_leads, mapping_leads.id_user as user_id 
                FROM mapping_leads
                LEFT JOIN leads ON leads.id_mapping_leads = mapping_leads.id_mapping_leads
                INNER JOIN users ON users.id_user = mapping_leads.id_user
                INNER JOIN branches ON branches.id_branch = mapping_leads.id_branch
                WHERE $this->where AND leads.id_mapping_leads IS NULL
                ORDER BY mapping_leads.id_user ASC
            "
            ),

            'leads' => $this->leads_model->query(
                "SELECT *, mapping_leads.id_mapping_leads as mapping_id_leads, mapping_leads.id_user as user_id 
                FROM leads
                INNER JOIN mapping_leads ON leads.id_mapping_leads = mapping_leads.id_mapping_leads
                INNER JOIN users ON users.id_user = mapping_leads.id_user
                INNER JOIN branches ON branches.id_branch = mapping_leads.id_branch
                WHERE $this->where
                ORDER BY mapping_leads.id_user ASC
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
        $update_mapping_leads = $this->mapping_leads->update($data, $where);
        $update_mapping_partner = $this->mapping_partner->update($data, $where);

        // if ($update_agent > 0 || $update_mapping_leads > 0 || $update_mapping_partner > 0) {
        // echo $update_agent . ' ' . $update_mapping_leads . ' ' . $update_mapping_partner;
        redirect('transfer_data');
        // }
    }

    public function update_transfer()
    {
        $post = $this->input->post(NULL, TRUE);

        $leads = $post['leads_transfer'];
        $partner = $post['partner_transfer'];
        $agent = $post['agent_transfer'];

        foreach ($leads as $key => $val) {
            $this->mapping_leads->update(['id_user' => $val], ['id_mapping_leads' => $key]);
        }

        foreach ($partner as $key => $val) {
            $this->mapping_partner->update(['id_user' => $val], ['id_mapping' => $key]);
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

        $where_data = ['id_mapping_leads' => $post['data']];
        $data = ['id_user' => $post['penginput']];
        $id = $this->mapping_leads->update($data, $where_data);


        echo json_encode($id);
    }

    public function update_partner()
    {
        $post = $this->input->post(NULL, TRUE);

        $where_data = ['id_mapping' => $post['data']];
        $data = ['id_user' => $post['penginput']];
        $id = $this->mapping_partner->update($data, $where_data);

        echo json_encode($id);
    }
}