<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postagens extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('logado')) {
			redirect(base_url('login'));
		}
	}

	public function index(){
		$this->load->view('header');
		$dados['postagens'] = $this->db->get('postagem')->result();
		$dados['primeiro'] = $this->funcaoDoFelipe($array);
		$dados['segundo'] = $this->funcaoDoFelipe($array);
		$this->load->view('administracao/nova_postagem',$dados);
		$this->load->view('footer');
	}

	public function adicionar(){
		$dados['titulo_postagem'] = $this->input->post('txt_titulo');
		$dados['texto_postagem'] = $this->input->post('txt_post');
		if ($this->db->insert('postagem',$dados)) {
			redirect(base_url('Postagens'));
		}else{
			echo "Erro ao postar!";
		}
	}

	public function alterar($id){
		$this->db->where('id_postagem',$id);
		$dados['postagem'] = $this->db->get('postagem')->result();
		$this->load->view('header');
		$this->load->view('administracao/alterar_postagem',$dados);
		$this->load->view('footer');
	}

	public function salvar_alteracao($id){
		$dados['titulo_postagem'] = $this->input->post('titulo_postagem');
		$dados['texto_postagem'] = $this->input->post('texto_postagem');
		$this->db->where('id_postagem',$this->input->post('id_postagem'));
		if ($this->db->update('postagem',$dados)) {
			redirect(base_url('postagens'));
		}else{
			echo "Erro ao atualizar";
		}
	}

	public function excluir($id){
		$this->db->where('id_postagem',$id);
		if ($this->db->delete('postagem')) {
			redirect(base_url('postagens'));
		}else{
			echo "erro ao deletar";
		}
	}

	public function logout(){
		echo "logout";
	}
}
