<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKriteria');
    }

    public function index()
    {
        $data = array(
            'analisis' => $this->mKriteria->selectAnalisis()
        );
        $this->load->view('KepalaSekolah/Layouts/header');
        $this->load->view('KepalaSekolah/vKriteria', $data);
        $this->load->view('KepalaSekolah/Layouts/footer');
    }
}

/* End of file cKriteria.php */
