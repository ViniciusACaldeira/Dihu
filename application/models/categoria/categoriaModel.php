<?php
    class categoriaModel extends CI_Model{
        public function criar()
        {
            if(!sizeof($_POST)) 
                return;
            $nome = $this->input->post('nome');
    
            if( empty($nome) )
                return;

            $sql = "INSERT INTO categoria (nome) VALUES ('$nome')";
            $this->db->query($sql);
        }

        public function coletaCategorias( )
        {
            return $this->db->get('categoria')->result( );
        }

        public function coletaCategoriasPorNome( $nome )
        {
            $sql = "SELECT * FROM categoria WHERE nome like '%$nome%s'";
            return $this->db->query($sql)->result( );
        }

        public function coletaCategoriaSubCategoria( )
        {
            $sql = "SELECT c.id categoriaID, c.nome nomeCategoria, sc.Nome nomeSubCategoria, sc.ID subCategoriaID
                    FROM categoria c
                    INNER JOIN subCategoria sc on c.id = sc.categoriaID
                    INNER JOIN informacoes i on i.subCategoriaID = sc.id
                    ORDER BY c.id";
            
            $resultado = $this->db->query($sql)->result( );
            
            $data = [];

            $categoria = new stdClass( );

            foreach( $resultado as $dados )
            {
                if( !isset($categoria->id) || $categoria->id != $dados->categoriaID )
                {
                    if( isset($categoria->id) )
                        array_push( $data, $categoria );

                    $categoria = new stdClass( );
                    $categoria->subCategorias = [];
                    $categoria->id = $dados->categoriaID;
                    $categoria->nome = $dados->nomeCategoria;
                }

                if( isset( $dados->subCategoriaID ) )
                {
                    $subCategoria = new stdClass( );
                    $subCategoria->id = $dados->subCategoriaID;
                    $subCategoria->nome = $dados->nomeSubCategoria;

                    array_push( $categoria->subCategorias, $subCategoria );
                }
            }

            if( isset($categoria->id) )
                array_push( $data, $categoria);

            return $data;
        }
    }