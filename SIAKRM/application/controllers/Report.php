<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Report extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->model("M_AnalisisRM");
    $this->load->model("M_poli");
    $this->load->model("M_dokter");
    $this->load->model("M_RM");
    $this->load->model('M_report');
  }
  
  public function index(){
  	$data = [
        'tittle'        => 'SIAKRM - Laporan Rekam Medis',
        'judul'         => 'Laporan Rekam Medis',
        'head'          => 'Laporan Rekam Medis',
        'isi'           => 'rekam_medis/v_analisis_rm/load_report',
    	  'arm'           => $this->M_report->tampil_analisis()
    ];
        
    $this->load->view('_partial/wrapper_content', $data);
  }

  public function pdf(){
  	$this->load->library('dompdf_gen');
  	$data['arm']           = $this->M_report->byDate($this->input->post('tanggalawal'),$this->input->post('tanggalakhir'));

  	$this->load->view('laporan', $data);

  	$paper_size = 'A4';
  	$orientation = 'landscape';
  	$html = $this->output->get_output();
  	$this->dompdf->set_paper($paper_size, $orientation);

  	$this->dompdf->load_html($html);
  	$this->dompdf->render();
  	$this->dompdf->stream("laporan.pdf", array('attachment' =>0 ));
  }
}