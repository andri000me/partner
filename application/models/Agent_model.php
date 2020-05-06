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
        return $this->db->affected_rows();
    }

    public function delete($where)
    {
        $this->db->delete('agents', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select('agents.*, tickets.status as status_ticket');
        $this->db->from('agents');
        $this->db->join('tickets', 'tickets.id_agent = agents.id_agent', 'left');
        // $this->db->join('users', 'users.id_user = agents.id_user', 'inner');
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