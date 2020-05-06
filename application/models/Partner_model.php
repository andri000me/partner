<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('partners_full', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('partners_full', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($where)
    {
        $this->db->delete('partners_full', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("partners_full.*, tickets.status as status_ticket");
        $this->db->from('partners_full');
        $this->db->join('tickets', 'tickets.id_partner = partners_full.id_partner', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }

    //custom

    public function get_mapping($where = NULL)
    {
        $this->db->select('*, mapping_partners.id_mapping as id_mapping_partner');
        $this->db->from('partners');
        $this->db->join('mapping_partners', 'mapping_partners.id_mapping = partners.id_mapping', 'right');
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