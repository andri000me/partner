<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_leads_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('mapping_leads', $data);
        return $this->db->insert_id();
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
        $this->db->select("*, A.id_mapping_leads as mapping_id, A.telepon as telepon_mapping");
        $this->db->from("mapping_leads A");
        $this->db->join("leads B", "A.id_mapping_leads = B.id_mapping_leads", "left");
        // $this->db->join("partners", "partners.id_partner = A.id_partner", "left");
        // $this->db->join("mapping_partners", "mapping_partners.id_mapping = partners.id_mapping", "left");
        // $this->db->join("agents", "agents.id_agent = A.id_agent", "left");
        // $this->db->join("branches", "branches.id_branch = A.id_branch", "inner");
        $this->db->join("users", "users.id_user = A.id_user", "inner");
        $this->db->where("B.id_mapping_leads IS NULL");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
