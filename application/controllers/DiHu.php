<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DiHu extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');

        $this->load->model( 'categoria/categoriaModel' );
        $Data['dados'] = $this->categoriaModel->coletaCategoriaSubCategoria( );

        $this->load->view('conheca-seus-direitos/index', $Data);

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
	}

    public function informacoes( $id )
    {
        $this->load->view('common/header');
		$this->load->view('common/navbar');

        $this->load->model( 'categoria/informacoesModel' );
        $Data['dados'] = $this->informacoesModel->coletaInformacoes( $id );

        $this->load->view('conheca-seus-direitos/informacoes', $Data);

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
    }

    public function cadastroCategoria( )
    {
        $this->load->view('common/header');
		$this->load->view('common/navbar');

        $this->load->view('cadastro/categoria/categoria');

        $this->load->model( 'categoria/categoriaModel' );
        $this->categoriaModel->criar();

		$this->load->view('common/footer');
    }

    public function cadastroSubCategoria( )
    {
        $this->load->view('common/header');
		$this->load->view('common/navbar');

        $this->load->model('categoria/categoriaModel');
        $Data['categorias'] = $this->categoriaModel->coletaCategorias( );

        $this->load->view('cadastro/categoria/subCategoria', $Data);

        $this->load->model('categoria/subCategoriaModel');
        $this->subCategoriaModel->criar();

		$this->load->view('common/footer');
    }

    public function cadastroInformacoes( )
    {
        $this->load->view('common/header');
		$this->load->view('common/navbar');

        $this->load->model('categoria/subCategoriaModel');
        $Data['subCategorias'] = $this->subCategoriaModel->coletaSubCategorias( );

        $this->load->view('cadastro/categoria/informacoes', $Data);

        $this->load->model('categoria/informacoesModel');
        $this->informacoesModel->criar();
        
		$this->load->view('common/footer');
    }
}