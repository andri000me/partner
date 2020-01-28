<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads_assignment_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('leads_assignments', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('leads_assignments', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('leads_assignments', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('leads_assignments');
        $this->db->join('branches', 'branches.id_branch = leads_assignments.id_branch', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
