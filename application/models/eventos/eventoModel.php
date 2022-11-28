<?php
    class eventoModel extends CI_Model{
        public function criar()
        {
            if(! sizeof($_POST)) 
                return;

            $categoria = $this->input->post( 'categoria' );
            $titulo = $this->input->post('titulo');
            $data = $this->input->post('data');
            $link = $this->input->post('link');
            $descricao = $this->input->post('descricao');
            

            $sql = "INSERT INTO evento ( data, descricao, link, titulo) 
                    VALUES ( '$data', '$descricao', '$link', '$titulo' )";

            $this->db->query($sql);
            $id = $this->db->insert_id();
            $sql = "INSERT INTO evento_categoria (eventoID, categoriaID) VALUES ( $id, $categoria)";
            $this->db->query($sql);
        }

        public function coletaEventosCategoria( )
        {
            $sql = "SELECT c.id categoriaID, c.nome categoriaNome, e.* FROM evento e
                    INNER JOIN evento_categoria ec ON ec.eventoID = e.ID
                    INNER JOIN categoria c ON ec.categoriaID = c.ID";

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
                    $categoria->eventos = [];
                    $categoria->id = $dados->categoriaID;
                    $categoria->nome = $dados->categoriaNome;
                }

                $evento = new stdClass( );
                $evento->id = $dados->id;
                $evento->titulo = $dados->titulo;
                $evento->descricao = $dados->descricao;
                $evento->link = $dados->link;
                $evento->data = $dados->data;
                
                $dataInicio = new DateTime( $dados->data );
                $hoje = new DateTime( );
                $evento->diasInicio = $dataInicio->diff( $hoje )->days;

                $evento->aberto = $dataInicio >= new DateTime( );
                
                array_push( $categoria->eventos, $evento );
            }

            if( isset($categoria->id) )
                array_push( $data, $categoria);

            return $data;
        }
}