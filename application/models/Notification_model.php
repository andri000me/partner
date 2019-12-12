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
        $this->db->select("*, user_pengirim.name as nama_pengirim, user_penerima.name as nama_penerima, DATE_FORMAT(notifications.created_at, '%d %b, %Y') as dibuat_pada");
        $this->db->from('notifications');
        // $this->db->join('partners', 'partners.id_partner = notifications.id_partner', 'left');
        $this->db->join('tickets', 'tickets.id_ticket = notifications.id_ticket', 'left');
        // $this->db->join('agents', 'agents.id_agent = notifications.id_agent', 'left');
        // $this->db->join('leads', 'leads.id_lead = notifications.id_lead', 'left');

        // Pengirim Notifikasi
        $this->db->join('users as user_pengirim', 'user_pengirim.id_user = notifications.pengirim', 'left');
        // penerima Notifikasi
        $this->db->join('users as user_penerima', 'user_penerima.id_user = notifications.penerima', 'left');
        // penerima cabang Notifikasi
        $this->db->join('branches as cabang_penerima', 'cabang_penerima.id_branch = notifications.penerima_cabang', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('id_notification', 'DESC');
        return $this->db->get();
    }
}
