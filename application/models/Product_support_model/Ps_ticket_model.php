<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ps_ticket_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('ps_tickets', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('ps_tickets', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('ps_tickets', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select('*');
        $this->db->from('ps_tickets');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}