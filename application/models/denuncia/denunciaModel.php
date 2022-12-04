<?php
    class denunciaModel extends CI_Model{
        
        const NOVO = 1;
        const VISTO = 2;
        const CANCELADO = 3;

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
            {
                $anonimo = 0;

                if( array_key_exists( 'id', $_SESSION ) )
                    $usuario = $_SESSION['id']; 
                else
                {
                    echo "Usuário não logado";
                    return false;
                }
            }

            $sql = "INSERT INTO denuncia (categoriaID, anonimo, descricao, usuarioID, status, data) 
                    VALUES ( $categoriaID, $anonimo, '$descricao', $usuario, $status, now() )";
            $this->db->query($sql);
        }

        public function listar( $id = null )
        {
            $joinUsuario = " LEFT ";

            $usuario = "";

            $eUsuario = $id != null;

            if( $eUsuario )
            {
                $joinUsuario = " INNER ";
                $usuario = " AND u.id = $id";
            }

            $eUsuario = $eUsuario ? "1" : "0";

            $sql = "SELECT d.*, c.nome direitoHumano, $eUsuario usuario, 
                    CASE 
                    WHEN status = 1 THEN 'NOVO' 
                    WHEN status = 2 THEN 'VISTO'
                    WHEN status = 3 THEN 'CANCELADO'
                    END statusNome
                    FROM denuncia d
                    INNER JOIN categoria c ON d.categoriaID = c.ID
                    $joinUsuario JOIN usuario u ON u.id = d.usuarioID
                                                $usuario";

            return $this->db->query($sql)->result( );
        }

        public function alterarStatus( $id, $novo )
        {
            $sql = "UPDATE denuncia SET status = $novo WHERE id = $id";

            $this->db->query($sql);
        }
    }
