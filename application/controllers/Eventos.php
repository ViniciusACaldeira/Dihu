<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');

		$this->load->model('eventos/eventoModel');
		$Data['dados'] = $this->eventoModel->coletaEventosCategoria( );

		$this->load->view('evento/index', $Data);

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
	}

    public function cadastro( )
    {
        $this->load->view('common/header');
		$this->load->view('common/navbar');

		$this->load->model('categoria/categoriaModel');
        $Data['categorias'] = $this->categoriaModel->coletaCategorias( );

		$this->load->view('cadastro/evento/evento', $Data);

		$this->load->model('eventos/eventoModel');
        $this->eventoModel->criar();

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
    }
}