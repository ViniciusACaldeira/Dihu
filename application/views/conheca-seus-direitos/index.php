<h1 class="titulo"> Conheça seus Direitos</h1>
<p class="titulo">Clique no tema para ampliar seu conhecimento</p>

<div class="content">
    <?php foreach( $dados as $categoria): ?>
        <details>
            <summary><?= $categoria->nomeCategoria?></summary>
            <div class="list-group list-group-light">
                <?php foreach( $categoria->subCategorias as $subCategoria): ?>
                    <details>
                        <summary><?= $subCategoria->nomeSubCategoria ?></summary>
                            <?php foreach( $subCategoria->informacoes as $informacao ): ?>
                                <a href="<?= base_url("dihu/informacoes/$informacao->informacaoID"); ?>" class="list-group-item list-group-item-action px-3 border-0" aria-current="true"><?= $informacao->informacaoTitulo?></a>
                            <?php endforeach; ?>
                    </details>
                <?php endforeach;?>
            </div>
        </details>
    <?php endforeach;?>
</div>

<style>
    details[open] details{
        margin-left: 40px;
    }
</style>