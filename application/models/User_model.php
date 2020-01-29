<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    // Get User
    public function get($id)
    {
        $this->db->from('users');
        $this->db->join('branches', 'branches.id_branch = users.id_branch');
        $this->db->where("nik = '$id' or email = '$id'");
        $query = $this->db->get();

        return $query;
    }

    public function get_all($where = NULL)
    {
        $this->db->from('users');
        $this->db->join('branches', 'branches.id_branch = users.id_branch', 'inner');
        if ($where != NULL) {
            $this->db->where($where);
        }
        $query = $this->db->get();

        return $query;
    }

    // Tambah User
    public function add($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    // Update User
    public function update($data, $where)
    {
        return $this->db->update('users', $data, $where);
    }

    // Delete User
    public function del($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('users');
    }

    //Method Proses Login
    public function login($username)
    {
        $this->db->from('users');
        $this->db->where("(email = '$username' OR nik = '$username')");
        $query = $this->db->get();

        return $query;
    }

    public function login_log($data)
    {
        $this->db->insert('login_log', $data);
    }

    public function last_activity($id_user)
    {
        $this->db->select("*, TIMESTAMPDIFF(day, login_date, now()) as terakhir");
        $this->db->from("login_log");
        $this->db->where("id_user = $id_user");
        $this->db->order_by("login_date", "DESC");
        $this->db->limit(1);

        return $this->db->get();
    }
}
