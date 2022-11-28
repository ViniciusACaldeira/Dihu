<?php
    class informacoesModel extends CI_Model{
        public function criar()
        {
            if(! sizeof($_POST)) return;

            $descricao = $this->input->post('descricao');
            $links = $this->input->post('links');
            $titulo = $this->input->post('titulo');
            $subCategoria = $this->input->post( 'subCategoria' );

            $sql = "INSERT INTO informacoes (descricao, links, titulo, subCategoriaID) 
                    VALUES ('$descricao', '$links', '$titulo', $subCategoria )";

            $this->db->query($sql);
        }

        public function coletaInformacoes( $subCategoria )
        {
            $sql = "SELECT * FROM informacoes WHERE subCategoriaID = $subCategoria";
            $resultado = $this->db->query($sql)->result( )[0];
            $resultado->links = explode( ',', $resultado->links );

            return $resultado;
        }
    }