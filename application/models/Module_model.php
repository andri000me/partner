<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Module_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('modules', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('modules', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($where)
    {
        $this->db->delete('modules', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('modules');
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
