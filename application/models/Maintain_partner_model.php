<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintain_partner_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('maintain_partners', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('maintain_partners', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('maintain_partners', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, DATE_FORMAT(date_maintain, '%d %M %Y %H:%i:%s') as tanggal_maintain");
        $this->db->from("maintain_partners");
        $this->db->join("partners", "partners.id_partner = maintain_partners.id_partner", "inner");
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('date_maintain', 'DESC');
        return $this->db->get();
    }
}
