<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approval_bonus_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('approval_bonuses', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('approval_bonuses', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($where)
    {
        $this->db->delete('approval_bonuses', $where);
    }

    public function get($where = NULL)
    {

        $this->db->from('approval_bonuses');
        // $this->db->join('users', 'users.id_user = approval_bonuses.id_user', 'inner');
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
