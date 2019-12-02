<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agent_activity_model extends CI_Model
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
        $this->db->select("*, DATE_FORMAT(date_activity, '%d %M %Y %H:%i:%s') as tanggal_activity");
        $this->db->from('agent_activities');
        $this->db->join('agents', 'agents.id_agent = agent_activities.id_agent', 'inner');
        $this->db->join('users', 'users.id_user = agent_activities.id_user', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('date_activity', 'DESC');
        // $this->db->limit(10);
        return $this->db->get();
    }
}