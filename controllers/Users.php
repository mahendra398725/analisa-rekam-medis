<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_users");
    }

    function index()
    {
        $data = [
            'tittle'        => 'SIAKRM - Data User',
            'judul'         => 'DATA USER',
            'head'          => 'User',
            'isi'           => 'rekam_medis/v_user/list',
            'users'         => $this->M_users->tampil_user(),
            'roles'         => $this->M_users->tampil_role(),
            'kd_user'       => $this->M_users->ambil_kode()
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content',  $data);
    }

    function tambah()
    {
        $kd_user           = $this->M_users->ambil_kode();
        $nama_users        = $this->input->post('nama_users');
        $username          = $this->input->post('username');
        $email             = $this->input->post('email');
        $password          = $this->input->post('password');
        $roles             = $this->input->post('roles');
        $tempat_lahir      = $this->input->post('tempat_lahir');
        $tanggal_lahir     = $this->input->post('tanggal_lahir');
        $jenis_kelamin     = $this->input->post('jenis_kelamin');
        $no_ktp            = $this->input->post('no_ktp');
        $no_telp           = $this->input->post('no_telp');
        $agama             = $this->input->post('agama');
        $alamat            = $this->input->post('alamat');
        
        $data = array(
            'kd_user'           => $kd_user,
            'nama_users'        => strtoupper($nama_users),
            'username'          => $username,
            'email'             => $email,
            'password'          => md5($password),
            'roles'             => $roles,
            'tempat_lahir'      => strtoupper($tempat_lahir),
            'tanggal_lahir'     => $tanggal_lahir,
            'jenis_kelamin'     => $jenis_kelamin,
            'no_ktp'            => $no_ktp,
            'no_telp'           => $no_telp,
            'agama'             => $agama,
            'alamat'            => $alamat,
        );
        $this->M_users->simpan($data);
        return redirect(base_url('users'));
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

    function edit($id_user=NULL)
    {        
        $data = array(
            'id_user'           => $id_user,
            'kd_user'           => $this->M_users->ambil_kode(),
            'nama_users'        => $this->input->post('nama_users'),
            'username'          => $this->input->post('username'),
            'email'             => $this->input->post('email'),
            'password'          => $this->input->post('password'),
            'roles'             => $this->input->post('roles'),
            'tempat_lahir'      => $this->input->post('tempat_lahir'),
            'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'no_ktp'            => $this->input->post('no_ktp'),
            'no_telp'           => $this->input->post('no_telp'),
            'agama'             => $this->input->post('agama'),
            'alamat'            => $this->input->post('alamat')
        );
        $this->M_users->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit!!');
        redirect('users');
    }

    function delete($id_user=NULL){
        $data = array('id_user' => $id_user);
        $this->M_users->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!!');
        redirect('users');
    }
}
