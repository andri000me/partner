<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner_activity_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('partner_activities', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('partner_activities', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('partner_activities', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*,  DATE_FORMAT(date_activity, '%d %b, %Y') as tanggal_activity");
        $this->db->from('partner_activities');
        $this->db->join('partners', 'partners.id_partner = partner_activities.id_partner', 'inner');
        $this->db->join('users', 'users.id_user = partner_activities.id_user', 'inner');
        $this->db->join('branches', 'branches.id_branch = users.id_branch', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('date_activity', 'DESC');
        // $this->db->limit(10);
        return $this->db->get();
    }
}
