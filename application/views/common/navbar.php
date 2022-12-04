<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('dihu'); ?>">Conheça seus Direitos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('eventos'); ?>">Eventos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('denuncie'); ?>">Denuncie</a>
                </li>
                <li class="nav-item me-3 me-lg-0 dropdown">
                    <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-mdb-toggle="dropdown"
                    >
                    <i class="fas fa-user"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <?php if( array_key_exists( 'admin', $_SESSION ) && $_SESSION['admin'] ): ?>
                            
                            <li>
                                <a class="dropdown-item" href="<?= base_url('denuncie/analisar'); ?>">Analisar Denuncias</a>
                            </li>

                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('eventos/cadastro'); ?>">Cadastrar Eventos</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?= base_url('dihu/cadastroCategoria'); ?>">Cadastrar Categoria - Direitos Humanos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('dihu/cadastroSubCategoria'); ?>">Cadastrar Sub Categoria - Direitos Humanos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('dihu/cadastroInformacoes'); ?>">Cadastrar Informações - Direitos Humanos</a>
                            </li>

                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('usuario/listar'); ?>">Listar usuários</a>
                            </li>

                            <li><hr class="dropdown-divider" /></li>

                        <?php endif; ?>

                        <?php if( array_key_exists( 'id', $_SESSION ) ): $usuario = $_SESSION['id']; ?>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('usuario/perfil'); ?>">Meu perfil</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?= base_url("denuncie/analisar/$usuario"); ?>">Minhas denuncias</a>
                            </li>

                            <li><hr class="dropdown-divider" /></li>

                            <li>
                                <a class="dropdown-item" href="<?= base_url('usuario/sair'); ?>">Sair</a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('usuario/logar'); ?>">Logar-se</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('usuario/cadastro'); ?>">Cadastrar-se</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>