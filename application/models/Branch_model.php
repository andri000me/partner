<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branch_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('branches', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('branches', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('branches', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from("branches");
        // $this->db->join("leads B", "A.id_mapping_leads = B.id_mapping_leads", "left");
        // $this->db->where("B.id_mapping_leads IS NULL");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
