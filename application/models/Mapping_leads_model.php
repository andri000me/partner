<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_leads_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('mapping_leads', $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->update('mapping_leads', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($where)
    {
        $this->db->delete('mapping_leads', $where);
    }

    public function get($where = NULL)
    {
        $this->db->select("*, mapping_leads.id_mapping_leads as mapping_id, mapping_leads.telepon as telepon_mapping");
        $this->db->from("mapping_leads");
        $this->db->join("leads", "mapping_leads.id_mapping_leads = leads.id_mapping_leads", "left");
        // $this->db->join("partners", "partners.id_partner = A.id_partner", "left");
        // $this->db->join("mapping_partners", "mapping_partners.id_mapping = partners.id_mapping", "left");
        // $this->db->join("agents", "agents.id_agent = A.id_agent", "left");
        $this->db->join("branches", "branches.id_branch = mapping_leads.id_branch", "inner");
        $this->db->join("users", "users.id_user = mapping_leads.id_user", "inner");
        $this->db->where("leads.id_mapping_leads IS NULL");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }

    public function query($query)
    {
        return $this->db->query($query);
    }

    // Fungsi untuk melakukan proses upload file
    public function upload_file($filename)
    {
        $this->load->library('upload'); // Load librari upload

        $config['upload_path'] = './excel/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size']    = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;

        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
    public function insert_multiple($data)
    {
        $this->db->insert_batch('siswa', $data);
    }
}
