<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {


    function insert($data)
    {
     $this->db->insert('users_tbl', $data);
     return $this->db->insert_id();
    }
}