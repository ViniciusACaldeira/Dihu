<h1 class="titulo">Eventos</h1>

<div class="content">
    <?php foreach( $dados as $categoria): ?>
        <details>
        <summary><?= $categoria->nome?></summary>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach( $categoria->eventos as $evento): ?>
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
        </details>
    <?php endforeach;?>
</div>