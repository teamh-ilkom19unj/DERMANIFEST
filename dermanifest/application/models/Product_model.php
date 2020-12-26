<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function get($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('ingredients')->row();
    }
}
