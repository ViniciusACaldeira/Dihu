<h1 class="titulo"><?= $dados->titulo?></h1>

<div class="content">
    <?= $dados->descricao ?>

    <div class="mt-4">
        <h4>Eventos sobre o tema</h4>
    </div>
    
    <div class="mt-4">
        <h4>Links para se aprofundar no assunto</h4>
        <ol class="list-group list-group-light list-group">
            <?php foreach( $dados->links as $link): ?>
                <a href="<?= $link ?>" target="_blank" class="list-group-item"><?= $link ?></a>
            <?php endforeach;?>
        </ol>
    </div>
    
</div>