<?php
    class denunciaModel extends CI_Model{
        
        const NOVO = 1;
        const VISTO = 2;

        public function criar()
        {
            if(!sizeof($_POST)) 
                return;
            
            $categoriaID = $this->input->post('categoria');
            $anonimo = $this->input->post('anonimo');
            $descricao = $this->input->post('descricao');
            $usuario = "NULL";
            $status = $this::NOVO;
            
            if( empty($descricao) )
                return;

            if( $anonimo != 1 )
                $anonimo = 0;

            $sql = "INSERT INTO denuncia (categoriaID, anonimo, descricao, usuarioID, status, data) 
                    VALUES ( $categoriaID, $anonimo, '$descricao', $usuario, $status, now() )";
            $this->db->query($sql);
        }

        public function listar( )
        {
            $sql = "SELECT d.*, c.nome direitoHumano FROM denuncia d
                    INNER JOIN categoria c ON d.categoriaID = c.ID";

            return $this->db->query($sql)->result( );
        }

    }
