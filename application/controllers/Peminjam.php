<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Peminjam extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['peminjam_m', 'paket_m', 'armada_m']);
    }


    public function index()
    {
        $data['row'] = $this->peminjam_m->get();
        $this->template->load('template', 'peminjam/data_pinjam', $data);
    }

    public function print($id)
    {
        $data = array(
            'row' => $this->peminjam_m->get($id)->row(),
            'paket' => $this->paket_m->get($id)->row(),
        );
        $this->load->view('peminjam/cetak_pinjam', $data);
    }

    public function add()
    {


        $peminjam = new stdClass();
        $peminjam->id_pinjam = null;
        $peminjam->nik = null;
        $peminjam->nama_peminjam = null;
        $peminjam->alamat = null;
        $peminjam->paket_sewa = null;
        $peminjam->tgl_pinjem = null;
        $peminjam->tgl_kembali = null;
        $peminjam->nama_mobil = null;


        $query_armada = $this->armada_m->get();
        $armada[null] = '- pilih data - ';
        foreach ($query_armada->result() as $arm) {
            $armada[$arm->id_armada] = $arm->nama_mobil;
        }

        $query_sewa = $this->paket_m->get();
        $sewa[null] = '- pilih data - ';
        foreach ($query_sewa->result() as $sw) {
            $sewa[$sw->id_paket] = $sw->paket_sewa;
        }


        $data = array(
            'page' => 'add',
            'armada' => $armada, 'selectedarmada' => null,
            'sewa' => $sewa, 'selectedsewa' => null,
            'row' => $peminjam,
        );
        $this->template->load('template', 'peminjam/add_data_pinjam', $data);
    }

    public function prosess()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->peminjam_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->peminjam_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil di simpan !!!');
        }
        redirect('peminjam', 'refresh');
    }


    public function del($id)
    {
        $id = $this->peminjam_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil di hapus !!!');
        }
        redirect('peminjam', 'refresh');
    }

    public function edit($id)
    {
        $query = $this->peminjam_m->get($id);
        if ($query->num_rows() > 0) {
            $peminjam = $query->row();

            $query_armada = $this->armada_m->get();
            $armada[null] = '- pilih data - ';
            foreach ($query_armada->result() as $arm) {
                $armada[$arm->id_armada] = $arm->nama_mobil;
            }

            $query_sewa = $this->paket_m->get();
            $sewa[null] = '- pilih data - ';
            foreach ($query_sewa->result() as $sw) {
                $sewa[$sw->id_paket] = $sw->paket_sewa;
            }
            $data = array(
                'page'    => 'edit',
                'row' => $peminjam,
                'armada' => $armada, 'selectedarmada' => $peminjam->id_armada,
                'sewa' => $sewa, 'selectedsewa' => $peminjam->id_paket,
            );
            $this->template->load('template', 'peminjam/add_data_pinjam', $data);
        }
    }
}

/* End of file Peminjam.php */
