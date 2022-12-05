<h1 class="titulo"><?= $dados->titulo?></h1>

<div class="content">
    <?= $dados->descricao ?>

    <div class="mt-4">
        <h4>Eventos sobre o tema</h4>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach( $dados->eventos as $evento): ?>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">Data Evento - <?=$evento->data?> </div>
                            <div class="card-body">
                                <h5 class="card-title"><?=$evento->titulo?></h5>
                                <p class="card-text"><?= $evento->descricao?></p>
                                <a href="<?= $evento->link ?>" target="_blank" class="btn btn-primary">Acessar</a>
                            </div>
                        <div class="card-footer text-muted"> 
                            <?php 
                                if( $evento->aberto) 
                                {
                                    echo $evento->diasInicio ." dias para o inicio";
                                }
                                else 
                                {
                                    echo "Encerrado";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
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