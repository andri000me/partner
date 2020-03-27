<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ps_activity_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('ps_activities', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('ps_activities', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('ps_activities', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select('*');
        $this->db->from('ps_activities');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}