<?php

require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
require 'vendor/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class AnalisisRekamMedis extends CI_Controller
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

    public function index()
    {
        $data = [
            'tittle'        => 'SIAKRM - Data Rekam Medis Pasien',
            'judul'         => 'DATA REKAM MEDIS',
            'head'          => 'Rekam Medis',
            'isi'           => 'rekam_medis/v_analisis_rm/list',
            'rms'           => $this->M_RM->tampil_rm(),
            'pl'            => $this->M_poli->tampil_poli(),
            'dr'            => $this->M_dokter->tampil_dokter(),
            'no_rm'         => $this->M_RM->ambil_kode(),
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);
    }

    function tambah()
    {
        $rm_id          = $this->input->post('rm_id');
        $poli_id       = $this->input->post('poli_id');
        $dokter_id        = $this->input->post('dokter_id');
        $petugas            = $this->fungsi->user_login()->nama_users;
        $status_kelengkapan = $this->input->post('status_kelengkapan');
        
        $data = array(
            'rm_id'          => $rm_id,
            'poli_id'       => $poli_id,
            'dokter_id'        => $dokter_id,
            'petugas'           => $petugas,
            'status_kelengkapan' => $status_kelengkapan
        );
        // $this->M_RM->simpan($data);
        $this->M_AnalisisRM->simpan($data);
        return redirect(base_url('analisisrekammedis'));
    }

    public function pie() {
        $data = [
            'tittle'        => 'SIAKRM - Data Rekam Medis Pasien',
            'judul'         => 'DATA REKAM MEDIS',
            'head'          => 'Rekam Medis',
            'isi'           => 'rekam_medis/v_analisis_rm/list',
            'rms'           => $this->M_RM->tampil_rm(),
            'pl'            => $this->M_poli->tampil_poli(),
            'dr'            => $this->M_dokter->tampil_dokter(),
            'no_rm'         => $this->M_RM->ambil_kode(),
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);

        //$data = [
        //    'tittle'        => 'SIAKRM - Data Rekam Medis Pasien',
        //    'judul'         => 'DATA REKAM MEDIS',
        //    'head'          => 'Rekam Medis',
        //    'isi'           => 'rekam_medis/v_grafik/pie_chart'
        //];
        //check_not_login();
        //$this->load->view('_partial/wrapper_content', $data);
    } 

}
