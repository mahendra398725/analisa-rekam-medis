<?php
class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    function index()
    {
        $data = [
            'tittle'    => 'Login',
            'isi'       => 'login'
        ];
        check_already_login();
        $this->load->view('_partial/wrapper_auth', $data);
    }

    public function process()
    {
       $post = $this->input->post(null, TRUE);
       if (isset($post['login'])) {
           $query = $this->M_login->login($post);
           if ($query->num_rows() > 0) {
               $row = $query->row();
               $params = array(
                'id_user' => $row->id_user,
                'roles' => $row->roles
               );
               $this->session->set_userdata($params);
               echo "<script>
                    alert('Selamat, Login berhasil....');
                    window.location='".site_url('dashboard')."';
                </script>";
           } else {
               echo "<script>
                    alert('Login gagal, silahkan masukkan email dan password yang benar..!!');
                    window.location='".site_url('dashboard')."';
                </script>";
           }
       }
    }

    public function logout()
    {
        $params = array('id_user', 'roles');
        $this->session->unset_userdata($params);
        redirect('auth');
    }
}