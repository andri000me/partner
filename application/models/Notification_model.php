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
        $this->db->select("*, 
        user_pengirim.name as nama_pengirim, 
        user_penerima.name as nama_penerima,
        cross.nama_cabang as cabang_asal,
        DATE_FORMAT(notifications.created_at, '%d %b, %Y') as dibuat_pada,
        leads.id_leads as id_lead,
        partners.id_partner as partner_id,
        agents.id_agent as agent_id");
        $this->db->from('notifications');
        $this->db->join('tickets', 'tickets.id_ticket = notifications.id_ticket', 'left');
        $this->db->join('partners', 'partners.id_partner = tickets.id_partner', 'left');
        $this->db->join('agents', 'agents.id_agent = tickets.id_agent', 'left');
        $this->db->join('leads', 'leads.id_leads = tickets.id_leads', 'left');

        // Pengirim Notifikasi
        $this->db->join('users as user_pengirim', 'user_pengirim.id_user = notifications.pengirim', 'left');
        // penerima Notifikasi
        $this->db->join('users as user_penerima', 'user_penerima.id_user = notifications.penerima', 'left');
        // penerima cabang Notifikasi
        $this->db->join('branches as cabang_penerima', 'cabang_penerima.id_branch = notifications.penerima_cabang', 'left');
        // cross branch Notifikasi
        $this->db->join('branches as cross', 'cross.id_branch = tickets.id_branch', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('id_notification', 'DESC');
        return $this->db->get();
    }
}
