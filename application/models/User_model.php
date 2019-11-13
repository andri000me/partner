<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    // Get User
    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->join('tb_cabang', 'user.id_cabang = tb_cabang.id_cabang', 'inner');
            $this->db->where("nik = '$id' or email = '$id'");
        }
        $query = $this->db->get();

        return $query;
    }

    // Tambah User
    public function add($data)
    {
        $this->db->insert('user', $data);
    }

    // Update User
    public function update($data, $where)
    {
        $this->db->update('user', $data, $where);
    }

    // Delete User
    public function del($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    //Method Proses Login
    public function login($username, $password)
    {
        $this->db->where("(email = '$username' OR nik = '$username') AND password =  '$password'");
        $this->db->where('is_active', 1);
        $query = $this->db->get('user');

        return $query;
    }
}
