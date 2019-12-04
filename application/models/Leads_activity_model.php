<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads_activity_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('leads_activities', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('leads_activities', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('leads_activities', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, DATE_FORMAT(date_activity, '%d %b, %Y') as tanggal_activity");
        $this->db->from('leads_activities');
        $this->db->join('leads', 'leads.id_leads = leads_activities.id_leads', 'inner');
        $this->db->join('users', 'users.id_user = leads_activities.id_user', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('date_activity', 'DESC');
        // $this->db->limit(10);
        return $this->db->get();
    }
}
