<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ps_ticket_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('ps_tickets', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('ps_tickets', $data, $where);
    }

    public function delete($where)
    {
        $this->db->delete('ps_tickets', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("
        *,
        ps_tickets.status as status_ticket,
        users.id_user as user_id,
        branches.id_branch as branch_id,
        users.name as requester,
        ps_tickets.status as status_approval,
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
        DATE_FORMAT(ps_tickets.created_at, '%d %b %Y') as tanggal_dibuat,
        DATE_FORMAT(ps_tickets.updated_at, '%d %b %Y %H:%i:%s') as tanggal_diubah,
        (CASE
            WHEN ps_tickets.id_my_cars IS NOT NULL THEN 'My Cars'
            WHEN ps_tickets.id_my_faedah_bangunan IS NOT NULL THEN 'My Faedah Bangunan'
            WHEN ps_tickets.id_my_faedah_lainnya IS NOT NULL THEN 'My Faedah Lainnya'
            WHEN ps_tickets.id_my_faedah_modal IS NOT NULL THEN 'My Faedah Modal'
            WHEN ps_tickets.id_my_faedah_qurban IS NOT NULL THEN 'My Faedah Qurban'
            
            WHEN ps_tickets.id_my_hajat_franchise IS NOT NULL THEN 'My Hajat Franchise'
            WHEN ps_tickets.id_my_hajat_lainnya IS NOT NULL THEN 'My Hajat Lainnya'
            WHEN ps_tickets.id_my_hajat_renovasi IS NOT NULL THEN 'My Hajat Renovasi'
            WHEN ps_tickets.id_my_hajat_sewa IS NOT NULL THEN 'My Hajat Sewa'
            WHEN ps_tickets.id_my_hajat_wedding IS NOT NULL THEN 'My Hajat Wedding'
            
            WHEN ps_tickets.id_my_ihram IS NOT NULL THEN 'My Ihram'
            WHEN ps_tickets.id_my_talim IS NOT NULL THEN 'My Talim'
            WHEN ps_tickets.id_my_safar IS NOT NULL THEN 'My Safar'
        END) as product_support 
        ");
        $this->db->from('ps_tickets');
        // Join Table `My Cars`
        $this->db->join('ps_my_cars', 'ps_my_cars.id_my_cars = ps_tickets.id_my_cars', 'left');
        // Join Table `My Cars`
        $this->db->join('ps_my_talim', 'ps_my_talim.id_my_talim = ps_tickets.id_my_talim', 'left');
        // Join Table `My Cars`
        $this->db->join('ps_my_safar', 'ps_my_safar.id_my_safar = ps_tickets.id_my_safar', 'left');
        // Join Table `My Cars`
        $this->db->join('ps_my_ihram', 'ps_my_ihram.id_my_ihram = ps_tickets.id_my_ihram', 'left');
        // Join Table `My Faedah Bangunan`
        $this->db->join('ps_my_faedah_bangunan', 'ps_my_faedah_bangunan.id_my_faedah_bangunan = ps_tickets.id_my_faedah_bangunan', 'left');
        // Join Table `My Faedah Lainnya`
        $this->db->join('ps_my_faedah_lainnya', 'ps_my_faedah_lainnya.id_my_faedah_lainnya = ps_tickets.id_my_faedah_lainnya', 'left');
        // Join Table `My Faedah Modal`
        $this->db->join('ps_my_faedah_modal', 'ps_my_faedah_modal.id_my_faedah_modal = ps_tickets.id_my_faedah_modal', 'left');
        // Join Table `My Hajat Qurban`
        $this->db->join('ps_my_faedah_qurban', 'ps_my_faedah_qurban.id_my_faedah_qurban = ps_tickets.id_my_faedah_qurban', 'left');
        // Join Table `My Hajat Renovasi`
        $this->db->join('ps_my_hajat_renovasi', 'ps_my_hajat_renovasi.id_my_hajat_renovasi = ps_tickets.id_my_hajat_renovasi', 'left');
        // Join Table `My Hajat Franchise`
        $this->db->join('ps_my_hajat_franchise', 'ps_my_hajat_franchise.id_my_hajat_franchise = ps_tickets.id_my_hajat_franchise', 'left');
        // Join Table `My Hajat Lainnya`
        $this->db->join('ps_my_hajat_lainnya', 'ps_my_hajat_lainnya.id_my_hajat_lainnya = ps_tickets.id_my_hajat_lainnya', 'left');
        // Join Table `My Hajat Sewa`
        $this->db->join('ps_my_hajat_sewa', 'ps_my_hajat_sewa.id_my_hajat_sewa = ps_tickets.id_my_hajat_sewa', 'left');
        // Join Table `My Hajat Wedding`
        $this->db->join('ps_my_hajat_wedding', 'ps_my_hajat_wedding.id_my_hajat_wedding = ps_tickets.id_my_hajat_wedding', 'left');
        // Join Table `Users`
        $this->db->join('users', 'users.id_user = ps_tickets.id_user', 'left');
        // Join Table `Users` (untuk id_user siapa yang meng-approve data tiket)
        $this->db->join('users as user_completed', 'user_completed.id_user = ps_tickets.completed_by', 'left');
        // Join Table `Users` (untuk id_user siapa yang meng-approve data tiket)
        $this->db->join('users as user_activated', 'user_activated.id_user = ps_tickets.activated_by', 'left');
        // Join Table `Users` (untuk id_user siapa yang memverikasi tanda tangan)
        $this->db->join('users as user_verified_ttd', 'user_verified_ttd.id_user = ps_tickets.verified_by', 'left');
        // Join Table `Branches`
        $this->db->join('branches', 'branches.id_branch = ps_tickets.id_branch', 'left');
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}