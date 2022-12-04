<?php
    class usuarioModel extends CI_Model{
        const USUARIO = 1;
        const ADMIN   = 2;
        const ADMINMASTER = 3;

        public function criar()
        {
            if(! sizeof($_POST)) 
                return;

            $nome = strtolower($this->input->post('nome'));
            $email = $this->input->post('email');
            $senha = md5($this->input->post('senha'));

            $sql = "SELECT * FROM usuario where nome = '$nome' OR email = '$email' ";
            
            $query = $this->db->query($sql);

            if( $query->num_rows( ) > 0 )
            {
                $resultado = $query->result( )[0];

                if( $resultado->nome == $nome )
                    echo "Nome já cadastrado";
                else
                    echo "E-mail já cadastrado";

                return false;
            }
            else
            {
                $permissao = $this::USUARIO;
                $sql = "INSERT INTO usuario (nome, email, senha, permissao) VALUES ('$nome', '$email', '$senha', $permissao )";

                $this->db->query($sql);

                return true;
            }
        }

        public function logar( )
        {
            if(! sizeof($_POST)) 
                return;

            $nome = strtolower($this->input->post('nome'));
            $senha = md5($this->input->post('senha'));

            if( $nome != null && $senha != null )
            {
                $sql = "SELECT * FROM usuario WHERE (nome = '$nome' OR email = '$nome') AND senha = '$senha'";
                
                $query = $this->db->query($sql);

                if( $query->num_rows( ) > 0 )
                {
                    $resultado = $query->result( )[0];
                    $_SESSION["usuario"] = $nome;
                    $_SESSION["id"] = $resultado->id;
                    $_SESSION["admin"] = $resultado->permissao == $this::ADMIN || $resultado->permissao == $this::ADMINMASTER;

                    redirect( 'dihu' );
                }
                else
                    echo "falha ao logar";

                return;
            }

            echo "Usuário ou senha inválida";
        }

        public function coletarPerfil( $id )
        {
            $sql = "SELECT nome, email, id FROM usuario u WHERE id = $id";

            return $this->db->query($sql)->result( )[0];
        }

        public function listar( )
        {
            $admin = $this::ADMIN;

            $sql = "SELECT id, nome, email, data, false participante, CASE WHEN permissao = $admin THEN true ELSE false END admin FROM usuario ORDER BY data";

            return $this->db->query($sql)->result();
        }

        public function alterarFuncao( $id )
        {
            $sql = "SELECT permissao FROM usuario WHERE id = $id";

            $resultado = $this->db->query($sql)->result( )[0];

            $novaFuncao = $this::USUARIO;

            if( $resultado->permissao == $this::USUARIO )
                $novaFuncao = $this::ADMIN;

            $sql = "UPDATE usuario SET permissao = $novaFuncao WHERE id = $id";
            
            return $this->db->query($sql);
        }

        public function alterarSenha( )
        {
            if(! sizeof($_POST)) 
                return;

            $id = $_SESSION['id'];
            $senha = md5($this->input->post('senha'));

            $sql = "UPDATE usuario SET senha = '$senha' WHERE id = $id";

            return $this->db->query($sql);
        }
    }