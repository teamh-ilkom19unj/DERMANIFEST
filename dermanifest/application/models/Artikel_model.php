<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
    public function getArtikel($id = null)
    {
        if ($id != null)
            $this->db->where('id', $id);
        return $this->db->get('v_artikel')->result();
    }

    public function tambah($data)
    {
        $artikel = $data;
        unset($artikel['warna']);
        unset($artikel['jenis']);
        unset($artikel['kondisi']);

        $artikelWarna = [];
        $artikelJenis = [];
        $artikelKondisi = [];
        $this->db->trans_start();
        $this->db->insert('artikel', $artikel);
        $artikelId = $this->db->insert_id();

        foreach ($data['warna'] as $item) {
            array_push($artikelWarna, ['idArtikel' => $artikelId, 'idWarna' => $item]);
        }
        $this->db->insert_batch('artikel_warna', $artikelWarna);

        foreach ($data['jenis'] as $item) {
            array_push($artikelJenis, ['idArtikel' => $artikelId, 'idJenis' => $item]);
        }
        $this->db->insert_batch('artikel_jenis', $artikelJenis);

        foreach ($data['kondisi'] as $item) {
            array_push($artikelKondisi, ['idArtikel' => $artikelId, 'idKondisi' => $item]);
        }
        $this->db->insert_batch('artikel_kondisi', $artikelKondisi);
        
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    public function search($get)
    {
        $kategori = ['warna', 'jenis', 'kondisi'];
        $table = [
            'warna' => 'w.idWarna',
            'jenis' => 'j.idJenis',
            'kondisi' => 'k.idKondisi'
        ];
        $x = 1;
        $y = 1;
        foreach ($get as $key => $value) {
            if (in_array($key, $kategori)) {
                if ($key != 'kondisi') {
                    $this->db->where($table[$key], $value);
                } else {
                    $this->db->group_start();
                    foreach ($value as $k => $v) {
                        if ($y == 1) {
                            $this->db->where($table[$key], $v);
                        } else {
                            $this->db->or_where($table[$key], $v);
                        }
                        $y++;
                    }
                    $this->db->group_end();
                }
                $x++;
            }
        }
        $this->db->join('artikel_jenis j', 'a.id = j.idArtikel');
        $this->db->join('artikel_kondisi k', 'a.id = k.idArtikel');
        $this->db->join('artikel_warna w', 'a.id = w.idArtikel');
        $this->db->group_by('a.id');
        return $this->db->get('artikel a')->result();
    }
}
