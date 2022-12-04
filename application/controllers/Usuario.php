<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {

	public function index(){
		return $this->cadastro( );
	}

	public function cadastro(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
    
        $this->load->model('usuario/usuarioModel');
        $this->usuarioModel->criar();

        $this->load->view('cadastro/usuario/usuario');

        $this->load->view('common/footer');
    }

    public function logar( )
    {
        $this->load->view('common/header');
        $this->load->view('common/navbar');
    
        $this->load->model('usuario/usuarioModel');
        $this->usuarioModel->logar();

        $this->load->view('usuario/login');

        $this->load->view('common/footer'); 
    }

    public function perfil( )
    {
        $this->load->view('common/header');
        $this->load->view('common/navbar');
    
        $this->load->model('usuario/usuarioModel');
        $Data['dados'] = $this->usuarioModel->coletarPerfil($_SESSION['id']);

        $this->load->view('usuario/perfil', $Data);

        $this->load->view('common/footer'); 
    }

    public function listar( )
    {
        $this->load->view('common/header');
        $this->load->view('common/navbar');
    
        $this->load->model('usuario/usuarioModel');
        $Data['dados'] = $this->usuarioModel->listar( );

        $this->load->view('usuario/lista', $Data);

        $this->load->view('common/footer'); 
    }
    
    public function alterarFuncao( $id )
    {
        $this->load->model('usuario/usuarioModel');
        $this->usuarioModel->alterarFuncao( $id );
        
        return redirect('usuario/listar');
    }

    public function alterarSenha( )
    {
        $this->load->view('common/header');
        $this->load->view('common/navbar');
    
        $this->load->model('usuario/usuarioModel');
        $this->usuarioModel->alterarSenha( );

        $this->load->view('cadastro/usuario/alterar_senha');

        $this->load->view('common/footer'); 
    }

    public function sair( )
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['usuario']);
        unset($_SESSION['admin']);
        redirect('dihu');
    }
}
