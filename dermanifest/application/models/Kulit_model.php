<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kulit_model extends CI_Model
{
    public function getWarna($id = null)
    {
        if ($id != null)
            $this->db->where('id', $id);
        return $this->db->get('warna_kulit')->result();
    }

    public function getJenis($id = null)
    {
        if ($id != null)
            $this->db->where('id', $id);
        return $this->db->get('jenis_kulit')->result();
    }

    public function getKondisi($id = null)
    {
        if ($id != null)
            $this->db->where('id', $id);
        return $this->db->get('kondisi_kulit')->result();
    }
}
