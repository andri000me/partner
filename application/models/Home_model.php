<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function create($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }

    public function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete($table, $where)
    {
        $this->db->delete($table, $where);
    }

    public function get($table, $id = NULL)
    {
        $this->db->from($table);
        if ($id != null) {
            $this->db->where($id);
        }
        return $this->db->get();
    }
}
