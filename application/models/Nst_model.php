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
        $this->db->join('fs_konsumen', 'fs_konsumen.leads_id = nst.leads_id', 'left');
        $this->db->join('leads_full', 'leads_full.id_leads = fs_konsumen.id_leads', 'left');
        $this->db->join('users', 'users.id_user = nst.id_user', 'left');
        $this->db->join('branches', 'branches.id_branch = nst.id_branch', 'left');
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
