<?php
class Polis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_poli");
    }

    function index()
    {
        $data = [
            'tittle'        => 'SIAKRM - Data Poli',
            'judul'         => 'DATA POLI',
            'head'          => 'Poli',
            'isi'           => 'rekam_medis/v_poli/list',
            'polis'         => $this->M_poli->tampil_poli(),
            'kd_poli'       => $this->M_poli->ambil_kode()
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);
    }

    function tambah()
    {
        $kd_poli           = $this->M_poli->ambil_kode();
        $nama_poli         = $this->input->post('nama_poli');

        $data = array(
            'kd_poli'           => $kd_poli,
            'nama_poli'        => strtoupper($nama_poli),
        );
        $this->M_poli->simpan($data);
        return redirect(base_url('polis'));
    }

    function edit($id_poli=NULL)
    {
        $data = array(
            'id_poli'         => $id_poli,
            'kd_poli'         => $this->M_poli->ambil_kode(),
            'nama_poli'           => $this->input->post('nama_poli'),
        );
        $this->M_poli->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit!!');
        redirect('polis');
    }

    function detail()
    {
        $data = [
            'tittle'        => 'SIAKRM - Detail User',
            'judul'         => 'DATA USER',
            'users'         => $this->M_users->tampil_user(),
            'roles'         => $this->M_users->tampil_role(),
        ];
        $this->load->view('rekam_medis/v_user/detail', $data);
    }

    function delete($id_poli=NULL){
        $data = array('id_poli' => $id_poli);
        $this->M_dokter->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!!');
        redirect('polis');
    }
}
