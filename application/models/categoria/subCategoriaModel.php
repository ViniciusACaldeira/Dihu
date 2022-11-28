<?php
    class subCategoriaModel extends CI_Model{
        public function criar()
        {
            if(! sizeof($_POST)) return;
            $nome = $this->input->post('nome');
            $descricao = $this->input->post('descricao');
            $categoriaID = $this->input->post('categoria');
            
            $sql = "INSERT INTO subCategoria (nome, descricao, categoriaID) VALUES ('$nome', '$descricao', $categoriaID)";
            $this->db->query($sql);
        }

        public function coletaSubCategorias( )
        {
            return $this->db->get('subCategoria')->result( );

        }

        public function coletaSubCategoriasPorNome( $nome )
        {
            $sql = "SELECT * FROM subCategoria WHERE nome like '%$nome%s'";
            return $this->db->query($sql);
        }

    }