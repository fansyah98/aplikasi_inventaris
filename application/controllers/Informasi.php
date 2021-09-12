<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function index()
    {
        $this->template->load('template', 'informasi/data_informasi');
    }
}

/* End of file Informasi.php */
