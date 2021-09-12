<?php
class Fungsi
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function user_login()
    {
        $this->CI->load->model('user_m');
        $user_id = $this->CI->session->userdata('userid');
        $user_data = $this->CI->user_m->get($user_id)->row();
        return $user_data;
    }

    public function count_armada() // fungsi buku
    {
        $this->CI->load->model('armada_m'); //load model bukum
        return $this->CI->armada_m->get()->num_rows(); // ambil total dari data dari buku
    }
}
