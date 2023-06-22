<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_AnalisisRM");
        $this->load->model("M_RM");
    }

    function index()
    {
        $data = [
            'tittle'    => 'SIAKRM - Beranda',
            'isi'       => 'dashboard',
            'totRM'  => $this->M_RM->totalRM(),
            'totARM'  => $this->M_AnalisisRM->totalARM()
        ];
        check_not_login();
        $this->load->view('_partial/wrapper', $data);
    }

    function comingsoon()
    {
        check_not_login();
        $this->load->view('comingsoon');
    }
}
