<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = [
            'tittle'    => 'SIAKRM - Beranda',
            'isi'       => 'dashboard'
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
