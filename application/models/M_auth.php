<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function CekLogin($table, $username, $password)
    {
        $this->db->where($username, $password);
        return $this->db->get($table)->row_array();
    }
}
