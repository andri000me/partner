<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fs_konsumen_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('fs_konsumen', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('fs_konsumen', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('fs_konsumen', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, fs_konsumen.id_leads as id, tickets.status as status_approval");
        $this->db->from('fs_konsumen');
        $this->db->join('leads_full', 'leads_full.id_leads = fs_konsumen.id_leads', 'inner');
        $this->db->join('branches', 'branches.id_branch = leads_full.id_branch', 'inner');
        $this->db->join('users', 'users.id_user = leads_full.id_user', 'inner');
        $this->db->join('tickets', 'tickets.id_leads = leads_full.id_leads', 'inner');
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