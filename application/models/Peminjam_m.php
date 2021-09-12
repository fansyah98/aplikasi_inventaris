<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Peminjam_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('data_pinjem');
        $this->db->join('data_paket', 'data_paket.id_paket= data_pinjem.paket_sewa');
        $this->db->join('data_armada', 'data_armada.id_armada = data_pinjem.nama_mobil');
        if ($id  != null) {
            $this->db->where('id_pinjam', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    public function add($post)
    {
        $params = [
            'nama_mobil ' => $post['armada'],
            'paket_sewa ' => $post['sewa'],
            'nik ' => $post['nik'],
            'nama_peminjam ' => $post['nama_peminjam'],
            'alamat ' => $post['alamat'],
            'tgl_pinjem ' => $post['tgl_pinjem'],
            'tgl_kembali ' => $post['tgl_kembali'],
        ];
        $this->db->insert('data_pinjem', $params);
    }
    public function edit($post)
    {
        $params = [
            'nama_mobil ' => $post['armada'],
            'paket_sewa ' => $post['sewa'],
            'nik ' => $post['nik'],
            'nama_peminjam ' => $post['nama_peminjam'],
            'alamat ' => $post['alamat'],
            'tgl_pinjem ' => $post['tgl_pinjem'],
            'tgl_kembali ' => $post['tgl_kembali'],
        ];
        $this->db->where('id_pinjam', $post['id']);
        $this->db->update('data_pinjem', $params);
    }

    public function del($id)
    {
        $this->db->where('id_pinjam', $id);
        $this->db->delete('data_pinjem');
    }
}

/* End of file Perminjam_m.php */
