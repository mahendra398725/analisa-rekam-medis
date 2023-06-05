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
            'p4'         	=> $this->M_AnalisisRM->poli4(),
            // 'rm1'            => $this->M_AnalisisRM->rekam1(),
            // 'rm2'            => $this->M_AnalisisRM->rekam2(),
            // 'rm3'            => $this->M_AnalisisRM->rekam3(),
            // 'rm4'            => $this->M_AnalisisRM->rekam4(),
            // 'rm5'            => $this->M_AnalisisRM->rekam5(),
            // 'rm6'            => $this->M_AnalisisRM->rekam6(),
            // 'rm7'            => $this->M_AnalisisRM->rekam7(),
            // 'rm8'            => $this->M_AnalisisRM->rekam8(),
            // 'rm9'            => $this->M_AnalisisRM->rekam9(),
            // 'rm10'            => $this->M_AnalisisRM->rekam10(),
            // 'rm11'            => $this->M_AnalisisRM->rekam11(),
            // 'rm12'            => $this->M_AnalisisRM->rekam12(),
            // 'rm13'            => $this->M_AnalisisRM->rekam13(),
            // 'rm14'            => $this->M_AnalisisRM->rekam14(),
            // 'rm15'            => $this->M_AnalisisRM->rekam15(),
            // 'rm16'            => $this->M_AnalisisRM->rekam16(),
            // 'rm17'            => $this->M_AnalisisRM->rekam17(),
            // 'rm18'            => $this->M_AnalisisRM->rekam18(),
            // 'rm19'            => $this->M_AnalisisRM->rekam19(),
            // 'rm20'            => $this->M_AnalisisRM->rekam20(),
            // 'rm21'            => $this->M_AnalisisRM->rekam21()
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);
    }

    
}