<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){
		$this->load->library('session');
		$this->load->view('header.php');
		$this->load->view('administracao/login');
		$this->load->view('footer.php');
	}

	public function efetuar_login(){
		$this->load->library('session');
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		if ($usuario == 'adm' && $senha = '123') {
			$array = array('logado' => true);
			$this->session->set_userdata($array);
			redirect(base_url('postagens'));
		}else{
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
	}

	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	
}
