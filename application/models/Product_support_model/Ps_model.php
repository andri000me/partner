<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_support_model extends CI_Model
{

    public function create($table, $data)
    {
        $this->db->insert('ps_' . $table, $data);
        return $this->db->affected_rows();
    }

    public function update($table, $data, $where)
    {
        $this->db->update('ps_' . $table, $data, $where);
    }

    public function delete($table, $where)
    {
        $this->db->delete('ps_' . $table, $where);
    }

    public function get($table, $where = NULL)
    {
        $this->db->select('*');
        $this->db->from('ps_' . $table);
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}