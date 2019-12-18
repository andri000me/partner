<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads_follow_up_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('leads_follow_up', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('leads_follow_up', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('leads_follow_up', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, DATE_FORMAT(date_follow_up, '%d %M %Y %H:%i:%s') as tanggal_follow_up");
        $this->db->from("leads_follow_up");
        $this->db->join("mapping_leads", "mapping_leads.id_mapping_leads = leads_follow_up.id_mapping_leads", "inner");
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('date_follow_up', 'DESC');
        return $this->db->get();
    }
}
