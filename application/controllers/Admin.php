<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_admin');

        if (!$this->session->logged) redirect('login');
        if ($this->session->level != 0) redirect(strtolower($this->session->access));
    }

    public function index() {
        $this->load->view('_partials/head');
        $this->load->view('_partials/sidebaradmin');
        $this->load->view('_partials/header');
        $this->load->view('admin/dashboard');
        $this->load->view('_partials/script');
    }

    public function nilaimhs() {
        $this->load->view('_partials/head');
        $this->load->view('_partials/sidebaradmin');
        $this->load->view('_partials/header');
        $this->load->view('admin/datanilaimhs');
        $this->load->view('_partials/script');
    }

    public function datadsn()
    {
        $data['admin'] = $this->model_admin->join_dosen('admin', ['id_admin' => $this->session->id]);
        $data['listd'] = $this->model_admin->join_dosen('dosen', ['nik' => $this->session->id]);

        $this->load->view('_partials/head');
        $this->load->view('_partials/sidebaradmin');
        $this->load->view('_partials/header');
        $this->load->view('admin/datadsn', $data);
        $this->load->view('_partials/script');
    }

    public function datamhs() {
        $data['admin'] = $this->model_admin->join_mhs('admin', ['id_admin' => $this->session->id]);
        $data['listm'] = $this->model_admin->join_mhs('mahasiswa', ['nim' => $this->session->id]);

        $this->load->view('_partials/head');
        $this->load->view('_partials/sidebaradmin');
        $this->load->view('_partials/header');
        $this->load->view('admin/datamhs', $data);
        $this->load->view('_partials/script');
    }

    public function profilmhs($nim) {
        $data['admin'] = $this->model_admin->join_mhs('admin', ['id_admin' => $this->session->id]);
        $data['listm'] = $this->model_admin->join_mhs('admin');
        $data['mahasiswa'] = $this->model_admin->join_mhs('mahasiswa', ['nim' => $nim]);

        $this->load->view('_partials/head');
        $this->load->view('_partials/sidebaradmin');
        $this->load->view('_partials/header');
        $this->load->view('admin/profilmhs', $data);
        $this->load->view('_partials/script');
    }

    public function profildsn($nik) {
        $data['admin'] = $this->model_admin->join_mhs('admin', ['id_admin' => $this->session->id]);
        $data['listd'] = $this->model_admin->join_mhs('admin');
        $data['dosen'] = $this->model_admin->join_mhs('dosen', ['nik' => $nik]);

        $this->load->view('_partials/head');
        $this->load->view('_partials/sidebaradmin');
        $this->load->view('_partials/header');
        $this->load->view('admin/profildsn', $data);
        $this->load->view('_partials/script');
    }

    public function dataruangan(){
            $data = [
                'listr' => $this->model_admin->get_db('ruangan'),
            ];
    
            $this->load->view('_partials/head');
            $this->load->view('_partials/sidebarprd');
            $this->load->view('_partials/header');
            $this->load->view('admin/dataruangan', $data);
            $this->load->view('_partials/script');
        }
    }

