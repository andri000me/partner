<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_partner_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('mapping_partners', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('mapping_partners', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('mapping_partners', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('mapping_partners');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
