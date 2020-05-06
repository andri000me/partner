<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_partner_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('mapping_partners', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('mapping_partners', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($where)
    {
        $this->db->delete('mapping_partners', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, mapping_partners.id_mapping as mapping_id");
        $this->db->from("mapping_partners");
        $this->db->join("partners", "mapping_partners.id_mapping = partners.id_mapping", "left");
        $this->db->where("partners.id_mapping IS NULL");
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