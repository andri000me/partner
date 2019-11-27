<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('notifications', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('notifications', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('notifications', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('notifications');
        $this->db->join('partners', 'partners.id_partner = notifications.id_partner', 'left');
        $this->db->join('agents', 'agents.id_agent = notifications.id_agent', 'left');
        $this->db->join('leads', 'leads.id_lead = notifications.id_lead', 'left');
        $this->db->join('users', 'users.id_user = notifications.id_user', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
