<h1 class="titulo">Meu Perfil</h1>

<div class="content">
    <div class="d-flex align-items-center justify-content-center">
        <img
            src="https://i.pinimg.com/564x/97/3c/d7/973cd7abb9925c0c4cb0e392319373a3.jpg"
            alt=""
            style="width: 100px; height: 100px"
            class="rounded-circle"
            />
        <div class="ms-3">
        <p class="fw-bold mb-1"><?= $dados->nome ?></p>
        <p class="text-muted mb-0"><?= $dados->email?></p>
        </div>
        
        
    </div>

    <div class="d-flex align-items-center justify-content-center mt-4">
        <a class="btn btn-primary" href="<?= base_url('usuario/alterarSenha'); ?>" role="button">Alterar senha</a>
    </div>
</div>