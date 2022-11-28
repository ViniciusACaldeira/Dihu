<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
	}

    public function cadastro( )
    {
        $this->load->view('common/header');
		$this->load->view('common/navbar');

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
    }
}