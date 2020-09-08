<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function query($query)
    {
        return $this->db->query($query);
    }
}
