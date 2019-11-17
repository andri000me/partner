<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('partners', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('partners', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('partners', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('partners');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
