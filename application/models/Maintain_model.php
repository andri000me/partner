<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mantain_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('mantains', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('maintains', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('maintains', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('maintains');
        $this->db->join('partners', 'partners.id_partner = maintains.id_partner', 'inner');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
