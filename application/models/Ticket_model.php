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
        $this->db->select("
        *,
        (CASE
            WHEN tickets.id_partner IS NOT NULL THEN 'Partner'
            WHEN tickets.id_agent IS NOT NULL THEN 'Agent'
            WHEN tickets.id_leads IS NOT NULL THEN 'Leads'
        END) as aktivitas_cabang, tickets.status as status_approval 
        ");
        $this->db->from('tickets');
        // Join Table `Partner`
        $this->db->join('partners', 'partners.id_partner = tickets.id_partner', 'left');
        // Join Table `Agents`
        $this->db->join('agents', 'agents.id_agent = tickets.id_agent', 'left');
        // Join Table `Leads`
        $this->db->join('leads', 'leads.id_leads = tickets.id_leads', 'left');
        // Join Table `Users`
        $this->db->join('users', 'users.id_user = tickets.id_user', 'left');
        // Join Table `Branches`
        $this->db->join('branches', 'branches.id_branch = tickets.id_branch', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
