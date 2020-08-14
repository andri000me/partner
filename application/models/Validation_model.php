<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validation_model extends CI_Model
{
    public function validate($table, $key, $id, $column, $value)
    {
        $this->db->from($table);
        $this->db->where_not_in($key, $id);
        $this->db->where([$column => $value]);

        $row = $this->db->get();

        // $row = $this->db->query("SELECT * FROM $table WHERE $key NOT IN($id) AND $column = '$value'")->num_rows();
        return $row->num_rows();
    }
}
