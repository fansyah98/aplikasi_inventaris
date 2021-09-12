<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('paket_m');
    }

    public function index()
    {
        $data['paket'] = $this->paket_m->get();
        $this->template->load('template', 'paket/data_paket', $data);
    }

    public function add()
    {

        $paket = new stdClass();
        $paket->id_paket = null;
        $paket->paket_sewa = null;
        $paket->harga_sewa = null;
        $paket->fasilitas = null;
        $paket->waktu_sewa = null;
        $data = array(
            'page' => 'add',
            'paket' => $paket
        );
        $this->template->load('template', 'paket/add_from_paket', $data);
    }

    public function prosess()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->paket_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->paket_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil di simpan !!!');
        }
        redirect('paket', 'refresh');
    }

    public function del($id)
    {
        $id = $this->paket_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil di simpan !!!');
        }
        redirect('paket', 'refresh');
    }

    public function edit($id)
    {
        $query = $this->paket_m->get($id);
        if ($query->num_rows() > 0) {
            $paket = $query->row();
            $data = array(
                'page' => 'edit',
                'paket' => $paket

            );
            $this->template->load('template', 'paket/add_from_paket', $data);
        } else {
            echo "<script>alert('Data yang anda cari tidak ada ');</script>";
            "window.location='" . site_url('jenis') . "'";
        }
    }
}

/* End of file Paket.php */
