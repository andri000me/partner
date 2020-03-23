<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_ihram_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('ps_my_ihram', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('ps_my_ihram', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('ps_my_ihram', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select('*');
        $this->db->from('ps_my_ihram');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}