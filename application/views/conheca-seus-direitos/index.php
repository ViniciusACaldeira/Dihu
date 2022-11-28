<h1 class="titulo"> Conheça seus Direitos</h1>
<p class="titulo">Clique no tema para ampliar seu conhecimento</p>

<div class="content">
    <?php foreach( $dados as $categoria): ?>
        <details>
        <summary><?= $categoria->nome?></summary>
            <div class="list-group list-group-light" style="min-width: 22rem;">
                <?php foreach( $categoria->subCategorias as $subCategoria): ?>
                    <a href="<?= base_url("dihu/informacoes/$subCategoria->id"); ?>" class="list-group-item list-group-item-action px-3 border-0" aria-current="true"><?= $subCategoria->nome?></a>
                <?php endforeach;?>
            </div>
        </details>
    <?php endforeach;?>
</div>