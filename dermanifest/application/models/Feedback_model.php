<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback_model extends CI_Model
{
    public function tambah($data)
    {
        $this->db->trans_start();
        $this->db->insert('feedback', $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
