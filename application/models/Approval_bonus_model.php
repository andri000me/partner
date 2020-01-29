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

    public function get_ticket($where = NULL)
    {
        
        
        $this->db->select("*, DATE_FORMAT(updated_at, '%d %b, %Y') as tanggal_diubah");
        $this->db->from("approval_bonuses");
        $this->db->join("users", "users.id_user = approval_bonuses.requester", "inner");
        $this->db->join("branches", "branches.id_branch = approval_bonuses.cabang", "inner");
        $this->db->join("tickets", "tickets.id_approval_bonus = approval_bonuses.id_approval_bonus", "inner");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }

    //Custom Query
    public function query($query)
    {
        return $this->db->query($query);
    }
}
