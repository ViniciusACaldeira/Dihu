<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');

        $this->load->view('usuario/cadastro_usuario');

		$this->load->view('common/footer');
	}

	public function criar(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
    
        $this->load->model('usuarioModel');
        $this->usuarioModel->criar();
    
        // aqui vai o conteudo da página
        $this->load->view('usuario/cadastro_usuario');
        $this->load->view('usuario/login');
        $this->load->view('usuario/cadastrado');
        $this->load->view('common/footer');
        }
}
