<?php

class Fungsi {
	
	protected $ci;

	function __construct()
	{
		$this->ci =& get_instance();
	}

	function user_login()
	{
		$this->ci->load->model('M_login');
		$id_users = $this->ci->session->userdata('id_user');
		$user_data = $this->ci->M_login->get($id_users)->row();
		return $user_data;
	}
}