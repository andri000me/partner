<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('tickets', $data);
        return $this->db->insert_id();
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
        tickets.id_agent as agent_id,
        tickets.id_partner as partner_id,
        tickets.id_leads as lead_id,

        tickets.status as status_ticket,
        users.id_user as user_id,
        branches.id_branch as branch_id,
        users.name as requester,
        tickets.status as status_approval,
        user_completed.name as nama_user_completed, 
        user_activated.name as nama_user_activated, 
        user_verified_ttd.name as nama_user_verified,

        DATE_FORMAT(date_pending, '%d %b, %Y') as tanggal_pending,
        DATE_FORMAT(date_approved_by_head, '%d %b, %Y') as tanggal_approved_by_head,
        DATE_FORMAT(date_approved_by_manager, '%d %b, %Y') as tanggal_approved_by_manager,
        DATE_FORMAT(date_inprogress, '%d %b, %Y') as tanggal_inprogress,
        DATE_FORMAT(date_rejected, '%d %b, %Y') as tanggal_rejected,
        DATE_FORMAT(date_completed, '%d %b, %Y') as tanggal_completed,
        DATE_FORMAT(date_activated, '%d %b, %Y') as tanggal_activated,
        DATE_FORMAT(date_verified_ttd, '%d %b, %Y') as tanggal_verified_ttd,
        DATE_FORMAT(tickets.date_created, '%d %b %Y') as tanggal_dibuat,
        DATE_FORMAT(tickets.date_modified, '%d %b %Y %H:%i:%s') as tanggal_diubah,
        (CASE
            WHEN tickets.id_partner IS NOT NULL THEN 'Partner'
            WHEN tickets.id_agent IS NOT NULL THEN 'Agent'
            WHEN tickets.id_leads IS NOT NULL THEN 'Leads'
            WHEN tickets.id_nst IS NOT NULL THEN 'NST'
            WHEN tickets.id_approval_bonus IS NOT NULL THEN 'Approval Bonus'
        END) as aktivitas_cabang 
        ");
        $this->db->from('tickets');
        // Join Table `Partner`
        $this->db->join('partners_full', 'partners_full.id_partner = tickets.id_partner', 'left');
        // Join Table `Agents`
        $this->db->join('agents', 'agents.id_agent = tickets.id_agent', 'left');
        // Join Table `Leads`
        $this->db->join('leads_full', 'leads_full.id_leads = tickets.id_leads', 'left');
        // Join Table `Leads`
        $this->db->join('nst', 'nst.id_nst = tickets.id_nst', 'left');
        // Join Table `Approval Bonuses`
        $this->db->join('approval_bonuses', 'approval_bonuses.id_approval_bonus = tickets.id_approval_bonus', 'left');
        // Join Table `Users`
        $this->db->join('users', 'users.id_user = tickets.id_user', 'left');
        // Join Table `Users` (untuk id_user siapa yang meng-approve data tiket)
        $this->db->join('users as user_completed', 'user_completed.id_user = tickets.completed_by', 'left');
        // Join Table `Users` (untuk id_user siapa yang meng-approve data tiket)
        $this->db->join('users as user_activated', 'user_activated.id_user = tickets.activated_by', 'left');
        // Join Table `Users` (untuk id_user siapa yang memverikasi tanda tangan)
        $this->db->join('users as user_verified_ttd', 'user_verified_ttd.id_user = tickets.verified_by', 'left');
        // Join Table `Branches`
        $this->db->join('branches', 'branches.id_branch = tickets.id_branch', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
