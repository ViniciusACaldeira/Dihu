<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Denuncie extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');

		$this->load->model('categoria/categoriaModel');
        $Data['categorias'] = $this->categoriaModel->coletaCategorias( );

		$this->load->view('cadastro/denuncia/denuncia', $Data);

		$this->load->model('denuncia/denunciaModel');
        $this->denunciaModel->criar();

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
	}

	public function analisar( ){
		$this->load->view('common/header');
		$this->load->view('common/navbar');

		$this->load->model('denuncia/denunciaModel');
        $Data['dados'] = $this->denunciaModel->listar();

		$this->load->view('denuncia/analisar', $Data);

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
	}
}