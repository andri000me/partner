<?php

class Validation
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function validate($table, $key, $id, $column, $value)
    {
        // $row = $this->ci->db->query("SELECT * 
        // FROM $table 
        // WHERE $key NOT IN($id) AND $column = '$value'");

        $this->ci->db->from($table);
        $this->ci->db->where_not_in($key, $id);
        $this->ci->db->where([$column => $value]);

        $row = $this->ci->db->get();

        // $row = $this->ci->db->query("SELECT * FROM $table WHERE $key NOT IN($id) AND $column = '$value'")->num_rows();
        return $row;
    }
}
