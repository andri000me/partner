<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('leads_full', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('leads_full', $data, $where);
    }

    public function delete($id)
    {
        return $this->db->query("DELETE FROM leads_full WHERE id_leads IN($id)");
    }

    public function get($where = NULL)
    {
        $this->db->select("*,  DATE_FORMAT(leads_full.updated_at, '%d %b %y') as tanggal_diubah");
        $this->db->from('leads_full');
        $this->db->join('users', 'users.id_user = leads_full.id_user', 'inner');
        $this->db->join('branches', 'branches.id_branch = leads_full.id_branch', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }

    public function query($query)
    {
        return $this->db->query($query);
    }
}
