<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branch_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('branches', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('branches', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('branches', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from("branches");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
