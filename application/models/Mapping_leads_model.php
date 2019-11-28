<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_leads_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('mapping_leads', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('mapping_leads', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('mapping_leads', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, A.id_mapping_leads as mapping_id");
        $this->db->from("mapping_leads A");
        $this->db->join("leads B", "A.id_mapping_leads = B.id_mapping_leads", "left");
        $this->db->where("B.id_mapping_leads IS NULL");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
