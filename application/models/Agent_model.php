<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agent_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('agents', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('agents', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('agents', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('agents');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
