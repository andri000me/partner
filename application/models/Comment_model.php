<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('comments', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('comments', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('comments', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('comments');
        // $this->db->join('tickets', 'tickets.id_ticket = comments.id_ticket', 'inner');
        $this->db->join('users', 'users.id_user = comments.id_user', 'left');
        $this->db->join('partners', 'partners.id_partner = comments.id_partner', 'left');
        $this->db->join('agents', 'agents.id_agent = comments.id_agent', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
