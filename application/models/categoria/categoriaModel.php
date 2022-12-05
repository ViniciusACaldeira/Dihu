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
            $sql = "SELECT c.id categoriaID, c.nome nomeCategoria, sc.Nome nomeSubCategoria, sc.ID subCategoriaID, i.id informacaoID, i.titulo
                    FROM categoria c
                    INNER JOIN subCategoria sc on c.id = sc.categoriaID
                    INNER JOIN informacoes i on i.subCategoriaID = sc.id
                    ORDER BY c.id";
            
            $sql = "SELECT * FROM categoria";

            $categorias = $this->db->query($sql)->result( );
            
            $data = [];

            foreach( $categorias as $categoria )
            {
                $dados = new stdClass( );

                $dados->categoriaID = $categoria->id;
                $dados->nomeCategoria = $categoria->nome;
                $dados->subCategorias = [];
                
                $sql = "SELECT * FROM subCategoria WHERE categoriaID = $categoria->id";

                $subCategorias = $this->db->query($sql)->result( );

                foreach( $subCategorias as $subCategoria )
                {
                    $sb = new stdClass( );

                    $sb->nomeSubCategoria = $subCategoria->nome;
                    $sb->subCategoriaID = $subCategoria->id;
                    $sb->informacoes = [];

                    $sql = "SELECT * FROM informacoes WHERE subCategoriaID = $subCategoria->id";

                    $informacoes = $this->db->query($sql)->result( );

                    foreach( $informacoes as $informacao )
                    {
                        $inf = new stdClass( );

                        $inf->informacaoID = $informacao->id;
                        $inf->informacaoTitulo = $informacao->titulo;

                        array_push( $sb->informacoes, $inf );
                    }

                    array_push( $dados->subCategorias, $sb );
                }

                array_push( $data, $dados );
            }

            return $data;
        }
    }