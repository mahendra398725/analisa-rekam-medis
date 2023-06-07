<?php
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
            'rm1'            => $this->M_AnalisisRM->total('nama'),
            'rm2'            => $this->M_AnalisisRM->total('no_rm'),
            'rm3'            => $this->M_AnalisisRM->total('no_bpjs'),
            'rm4'            => $this->M_AnalisisRM->total('no_ktp'),
            'rm5'            => $this->M_AnalisisRM->total('JK'),
            'rm6'            => $this->M_AnalisisRM->total('tanggal_lahir'),
            'rm7'            => $this->M_AnalisisRM->total('umur'),
            'rm8'            => $this->M_AnalisisRM->total('alamat'),
            'rm9'            => $this->M_AnalisisRM->total('pekerjaan'),
            'rm10'            => $this->M_AnalisisRM->total('keluhan'),
            'rm11'            => $this->M_AnalisisRM->total('terapi'),
            'rm12'            => $this->M_AnalisisRM->total('tensi'),
            'rm13'            => $this->M_AnalisisRM->total('nadi'),
            'rm14'            => $this->M_AnalisisRM->total('suhu'),
            'rm15'            => $this->M_AnalisisRM->total('pernapasan'),
            'rm16'            => $this->M_AnalisisRM->total('tinggi'),
            'rm17'            => $this->M_AnalisisRM->total('berat'),
            'rm18'            => $this->M_AnalisisRM->total('lingkar_perut'),
            'rm19'            => $this->M_AnalisisRM->total('diagnosa'),
            'rm20'            => $this->M_AnalisisRM->total('tindakan'),
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);
    }

    
}
