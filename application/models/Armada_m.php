<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Armada_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('data_armada');
        if ($id != null) {
            $this->db->where('id_armada', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama_mobil ' => $post['nama_mobil'],
            'no_plat ' => $post['no_plat'],
            'tahun ' => $post['tahun'],
            'jenis_mobil' => $post['jenis_mobil'],
            'no_mesin ' => $post['no_mesin'],
        ];
        $this->db->insert('data_armada', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama_mobil ' => $post['nama_mobil'],
            'no_plat ' => $post['no_plat'],
            'tahun ' => $post['tahun'],
            'jenis_mobil' => $post['jenis_mobil'],
            'no_mesin ' => $post['no_mesin'],
        ];
        $this->db->where('id_armada', $post['id']);
        $this->db->update('data_armada', $params);
    }


    public function del($id)
    {
        $this->db->where('id_armada', $id);
        $this->db->delete('data_armada');
    }
}

/* End of file Armada_m.php */
