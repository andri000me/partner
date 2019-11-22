<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('tickets', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->update('tickets', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('tickets', $where);
    }

    public function get($where = NULL)
    {
        $this->db->from('tickets');
        $this->db->join('partners', 'partners.id_partner = tickets.id_partner', 'left');
        $this->db->join('agents', 'agent.id_agent = tickets.id_agent', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
