<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nst_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('nst', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('nst', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('nst', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('nst');
        $this->db->join('leads', 'leads.leads_id = nst.leads_id', 'inner');
        $this->db->join('mapping_leads', 'mapping_leads.id_mapping_leads = leads.id_mapping_leads', 'inner');
        $this->db->join('users', 'users.id_user = nst.id_user', 'inner');
        $this->db->join('branches', 'branches.id_branch = nst.id_branch', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
