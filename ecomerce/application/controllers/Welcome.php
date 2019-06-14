<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		$dados['postagem'] = $this->db->get('postagem')->result();
		$this->load->view('header');
		$this->load->view('postagem',$dados);
		$this->load->view('footer');
	}

	public function detalhes($id){
		$this->db->where('id_postagem',$id);
		$dados['postagem_d'] = $this->db->get('postagem')->result();
		$this->load->view('header');
		$this->load->view('detalhes_postagem',$dados);
		$this->load->view('footer');
	}

	public function fale_conosco(){
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('fale_conosco');
		$this->load->view('footer');
	}

	public function enviar_mensagem(){
		$mensagem = 'Nome: '.$this->input->post('txt_nomr').br();
		$mensagem .= 'Email: '.$this->input->post('txt_email').br();
		$mensagem .= 'Mensagem: '.$this->input->post('txt_mensagem').br();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '30';
		$config['smtp_user'] = /*'jonathas_tc@hotmail.com';*/ 'endereco_que_envia@gmail.com';
		$config['smtp_pass'] = /*'100%R4TTi23';*/ 'senhadoemailaqui';
		$config['charset'] = 'utf-8';
		$config['newline'] = '\r\n';
		$config['mailtype'] = 'html';
		$this->load->library('email',$config);
		$this->email->from('endereco_que_envia@gmail.com','Formulário do website');
		$this->email->to('email_que_recebe');
		$this->email->subject('Assunto do email, enviado pelo CodeIgniter');
		$this->email->message($mensagem);
		if($this->email->send()){
			$this->load->view('sucesso_envia_contato');
		}else{
			print_r($this->email->print_debugger());
		}
	}
}
