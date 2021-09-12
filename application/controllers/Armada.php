<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Armada extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('armada_m');
    }

    public function index()
    {
        $data['armada'] = $this->armada_m->get();
        $this->template->load('template', 'armada/data_armada', $data);
    }

    public function del($id)
    {
        $id = $this->armada_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil di simpan !!!');
        }
        redirect('armada', 'refresh');
    }

    public function add()
    {
        $armada = new stdClass();
        $armada->id_armada = null;
        $armada->nama_mobil = null;
        $armada->no_plat = null;
        $armada->tahun = null;
        $armada->jenis_mobil = null;
        $armada->no_mesin = null;

        $data = array(
            'page' => 'add',
            'armada' => $armada
        );
        $this->template->load('template', 'armada/add_data_armada', $data);
    }

    public function prosess()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->armada_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->armada_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil di simpan !!!');
        }
        redirect('armada', 'refresh');
    }

    public function edit($id)
    {
        $query = $this->armada_m->get($id);
        if ($query->num_rows() > 0) {
            $armada = $query->row();
            $data = array(
                'page' => 'edit',
                'armada' => $armada

            );
            $this->template->load('template', 'armada/add_data_armada', $data);
        } else {
            echo "<script>alert('Data yang anda cari tidak ada ');</script>";
            "window.location='" . site_url('jenis') . "'";
        }
    }
}

/* End of file Armada.php */
