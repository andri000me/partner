<?php
defined('BASEPATH') or exit('No direct script access allowed');

class leads_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('leads', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('leads', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('leads', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('leads');
        $this->db->join('mapping_leads', 'mapping_leads.id_mapping_leads = leads.id_mapping_leads', 'inner');
        // $this->db->join('users', 'users.id_user = mapping_leads.id_user', 'inner');
        // $this->db->join('branches', 'branches.id_branch = mapping_leads.id_branch', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
