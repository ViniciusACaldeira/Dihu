<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Denuncie extends CI_Controller {

	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');

        //$this->load->view('usuario/login');
		$this->load->view('common/footer');
	}
}