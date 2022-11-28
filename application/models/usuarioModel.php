<?php
    class usuarioModel extends CI_Model{
        public function criar()
        {
            if(! sizeof($_POST)) return;
            $nome = $this->input->post('nome');
            $sobrenome = $this->input->post('sobrenome');
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');
            $telefone = $this->input->post("telefone");
            $endereco = $this->input->post("endereco");
            $numero = $this->input->post("numero");
            $cep = $this->input->post("cep");
    
            $sql = "INSERT INTO usuario(nome, sobrenome, email, senha, telefone, endereco, numero, cep) 
            VALUES ('$nome', '$sobrenome', '$email', '$senha', '$telefone', '$endereco', '$numero', '$cep')";
            $this->db->query($sql);

        }


    }