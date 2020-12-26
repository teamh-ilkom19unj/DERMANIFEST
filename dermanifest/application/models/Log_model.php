<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log_model extends CI_Model
{
    public function save($data)
    {
        $this->db->trans_start();
        $this->db->insert('activity_log', $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
