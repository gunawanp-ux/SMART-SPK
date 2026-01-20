<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHitungSmart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	// Menampilkan halaman form untuk memilih periode (kelas & angkatan)
	public function index()
	{
		$data = array(
			'periode' => $this->mAnalisis->periode()
		);
		$this->load->view('WaliKelas/Layouts/header');
		$this->load->view('WaliKelas/Analisis/vFormAnalisis', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}

	// Melakukan perhitungan dan menampilkan hasilnya
	public function hitung()
	{
		$kelas = $this->input->post('kelas');
		$angkatan = $this->input->post('angkatan');

		// Memanggil fungsi kalkulasi dari model
		$ranking = $this->mAnalisis->calculate_smart($kelas, $angkatan);

		$data = array(
			'ranking' => $ranking,
			'kelas' => $kelas,
			'angkatan' => $angkatan
		);

		// Menampilkan halaman hasil
		$this->load->view('WaliKelas/Layouts/header');
		$this->load->view('WaliKelas/Analisis/vHasilAnalisis', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
}

/* End of file cHitungSmart.php */
