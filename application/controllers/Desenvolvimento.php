<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Desenvolvimento extends CI_Controller {

	public function precos1(){
        $this->load->view('common/header');
		$this->load->view('common/navbar');
        $this->load->view('shop/listaProduto');
        $this->load->view('shop/listaRoupa');
        $this->load->view('shop/listaColares');
        $this->load->view('shop/listaBrinco');
        $this->load->view('usuario/login');
        $this->load->view('common/footer');
        $this->load->view('common/rodape');
    }

	public function verproduto(){
        $this->load->view('common/header');
		$this->load->view('common/navbar');
        $this->load->view('shop/fichaProduto');
        $this->load->view('usuario/login');
        $this->load->view('common/footer');
        $this->load->view('common/rodape');
    }

    public function servicos(){
        $this->load->view('common/header');
		$this->load->view('common/navbar');
        $this->load->view('shop/listaServicos');
        $this->load->view('usuario/login');
        $this->load->view('common/footer');
        $this->load->view('common/rodape');
    }

}