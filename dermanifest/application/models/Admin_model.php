<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getUser($username)
    {
        $this->db->where('username', $username);
        $this->db->or_where('email', $username);
        return $this->db->get('admin')->row();
    }

    public function addUser($data)
    {
        $this->db->trans_start();
        $this->db->insert('admin', $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
