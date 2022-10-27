<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_mahasiswa');
	}

	public function index()
	{
		$data['list'] = $this->model_mahasiswa->get_mahasiswa();

		$this->load->view('mahasiswa', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('tahun_angkatan', 'Tahun Angkatan', 'required');

		if (!$this->form_validation->run()) {
			$this->load->view('create');
		} else {
			$this->model_mahasiswa->set_mahasiswa();
			redirect('mahasiswa');
		}
	}
}
