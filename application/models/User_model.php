<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    // Get User
    public function get($id)
    {
        $this->db->from('users');
        $this->db->where("nik = '$id' or email = '$id'");
        $query = $this->db->get();

        return $query;
    }

    // Tambah User
    public function add($data)
    {
        $this->db->insert('users', $data);
    }

    // Update User
    public function update($data, $where)
    {
        $this->db->update('users', $data, $where);
    }

    // Delete User
    public function del($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('users');
    }

    //Method Proses Login
    public function login($username, $password)
    {
        $this->db->from('users');
        $this->db->where("(email = '$username' OR nik = '$username') AND password =  '$password'");
        $query = $this->db->get();

        return $query;
    }
}
