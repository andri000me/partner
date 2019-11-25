<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner_activity_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('agent_activities', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('agent_activities', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('agent_activities', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('agent_activities');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
