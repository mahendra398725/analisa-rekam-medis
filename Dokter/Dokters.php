<?php
class Dokters extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_dokter");
    }

    function index()
    {
        $data = [
            'tittle'        => 'SIAKRM - Data Dokter',
            'judul'         => 'DATA DOKTER',
            'head'          => 'Dokter',
            'isi'           => 'rekam_medis/v_dokter/list',
            'dokters'         => $this->M_dokter->tampil_dokter(),
            'polis'         => $this->M_dokter->tampil_poli(),
            'kd_dokter'       => $this->M_dokter->ambil_kode()
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);
    }

    function tambah()
    {
        $kd_dokter         = $this->M_dokter->ambil_kode();
        // $poli_id           = $this->input->post('poli_id');
        $nip               = $this->input->post('nip');
        $nama_dokter       = $this->input->post('nama_dokter');
        // $tempat_lahir      = $this->input->post('tempat_lahir');
        // $tanggal_lahir     = $this->input->post('tanggal_lahir');
        // $jenis_kelamin     = $this->input->post('jenis_kelamin');
        $no_telp           = $this->input->post('no_telp');
        $alamat            = $this->input->post('alamat');

        $data = array(
            'kd_dokter'         => $kd_dokter,
            // 'poli_id'           => $poli_id,
            'nip'               => $nip,
            'nama_dokter'       => strtoupper($nama_dokter),
            // 'tempat_lahir'      => strtoupper($tempat_lahir),
            // 'tanggal_lahir'     => $tanggal_lahir,
            // 'jenis_kelamin'     => $jenis_kelamin,
            'no_telp'           => $no_telp,
            'alamat'            => $alamat,
        );
        $this->M_dokter->simpan($data);
        return redirect(base_url('dokters'));
    }

    function edit($id_dokter=NULL)
    {
        $data = array(
            'id_dokter'         => $id_dokter,
            'kd_dokter'         => $this->M_dokter->ambil_kode(),
            // 'poli_id'           => $this->input->post('poli_id'),
            'nip'               => $this->input->post('nip'),
            'nama_dokter'       => $this->input->post('nama_dokter'),
            // 'tempat_lahir'      => $this->input->post('tempat_lahir'),
            // 'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            // 'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'no_telp'           => $this->input->post('no_telp'),
            'alamat'            => $this->input->post('alamat'),
        );
        $this->M_dokter->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit!!');
        redirect('dokters');
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

    function delete($id_dokter=NULL){
        $data = array('id_dokter' => $id_dokter);
        $this->M_dokter->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!!');
        redirect('users');
    }
}
