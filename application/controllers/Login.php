<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
			  parent::__construct();
			  $this->load->model('Model_login');
	}

	public function login_user()
	{
			$this->form_validation->set_rules('username', 'Username', 'required',array(
						'required' => '%s Harus Diisi !!!'
			));
			$this->form_validation->set_rules('password', 'Password', 'required',array(
						'required' => '%s Harus Diisi !!!'
			));

			if ($this->form_validation->run() == TRUE) {
						$username = $this->input->post('username');
						$password = $this->input->post('password');
						$this->user_login->login($username, $password);
			}
			$data=array(
						'title' => 'Login User',
			);
			$this->load->view('login', $data ,FALSE);
	}
}
