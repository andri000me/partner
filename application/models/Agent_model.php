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

    public function delete($id)
    {
        // $this->db->delete('agents', $where);
        // return $this->db->query(
        //     "DELETE agents.*, tickets.*, agent_activities.*
        //         FROM agents
        //         LEFT JOIN agent_activities ON agent_activities.id_agent = agents.id_agent
        //         LEFT JOIN tickets ON tickets.id_agent = agents.id_agent
        //         WHERE agents.id_agent = $id
        //     "
        // );
        return $this->db->query("DELETE FROM agents WHERE id_agent IN($id)");
    }

    public function get($where = NULL, $list = FALSE)
    {
        $this->db->select('agents.*, tickets.status as status_ticket');
        if ($list == true)
            $this->db->select("branches.*");
        $this->db->from('agents');
        $this->db->join('tickets', 'tickets.id_agent = agents.id_agent', 'left');
        if ($list == true)
            $this->db->join('branches', 'branches.id_branch = agents.id_branch', 'left');
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
