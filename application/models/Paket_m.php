<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('data_paket');
        if ($id  != null) {
            $this->db->where('id_paket', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'paket_sewa ' => $post['paket_sewa'],
            'harga_sewa ' => $post['harga_sewa'],
            'fasilitas ' => $post['fasilitas'],
            'waktu_sewa ' => $post['waktu_sewa'],
        ];
        $this->db->insert('data_paket', $params);
    }

    public function edit($post)
    {
        $params = [
            'paket_sewa ' => $post['paket_sewa'],
            'harga_sewa ' => $post['harga_sewa'],
            'fasilitas ' => $post['fasilitas'],
            'waktu_sewa ' => $post['waktu_sewa'],
        ];
        $this->db->where('id_paket', $post['id']);
        $this->db->update('data_paket', $params);
    }

    public function del($id)
    {
        $this->db->where('id_paket', $id);
        $this->db->delete('data_paket');
    }
}

/* End of file Paket_m.php */
