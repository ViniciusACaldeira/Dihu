<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BaseAplicacao extends CI_Controller {

    public function redirecionamento( $mensagem, $sucesso, $url )
    {
        $Data['sucesso'] = $sucesso;
        $Data['url'] = $url;
        $Data['mensagem'] = $mensagem;

        $this->load->view('common/redirecionamento', $Data );
    }
}