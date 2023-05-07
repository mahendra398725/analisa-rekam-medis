<?php

require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
require 'vendor/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Grafik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_RM");
        $this->load->model("M_AnalisisRM");
        $this->load->model("M_poli");
        $this->load->model("M_dokter");
        $this->load->helper('tanggal');
        //$this->load->library('Excel');
    }

    public function index() {
        $data = [
            'tittle'        => 'SIAKRM - Grafik Rekam Medis',
            'judul'         => 'Grafik Rekam Medis',
            'head'          => 'Grafik Rekam Medis',
            'isi'           => 'rekam_medis/v_grafik/pie_chart',
            'l'           	=> $this->M_AnalisisRM->lengkap(),
            'tl'           	=> $this->M_AnalisisRM->tidak_lengkap(),
            'poli'          => $this->M_poli->tampil_poli(),
            'p1'         	=> $this->M_AnalisisRM->poli1(),
            'p2'         	=> $this->M_AnalisisRM->poli2(),
            'p3'         	=> $this->M_AnalisisRM->poli3(),
            'p4'         	=> $this->M_AnalisisRM->poli4()
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);
    }

    public function siswaPertahun()
    {
        $data["title"]      = "Grafik Siswa Lulus Per Tahun";
        $this->load->model("Model_chart", "Mchart"); // load Model_chart
        $data["chartSiswa"] = $this->Mchart->siswaPertahun(); // call method siswaPertahun di Model_chart
        $this->load->view('view_chart', $data); // passing data ke view_chart
    }
}