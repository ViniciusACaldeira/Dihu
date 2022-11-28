<h1 class="titulo">Cadastrar Evento</h1>

<div class="content">
    <form method="POST">
        <select required="required" id="categoria" name="categoria" class="form-select">
            <option selected value="0">Informe a Categoria referente ao Evento</option>
            <?php foreach( $categorias as $linha): ?>
                <option value="<?= $linha->id?>"><?= $linha->nome ?></option>
            <?php endforeach;?>
        </select>
        
        <div class="form-outline mb-4 mt-4">
            <input type="text" id="titulo" name="titulo" class="form-control" />
            <label class="form-label" for="titulo">Informe o titulo do evento</label>
        </div>

        <label for="data">Data do Evento</label>
        <input id="data" class="form-control" name="data" type="datetime-local" />

        <div class="form-outline mb-4 mt-4">
            <input type="text" id="link" name="link" class="form-control" />
            <label class="form-label" for="link">Informe o link de acesso do Evento</label>
        </div>

        <div class="form-outline mb-4">
            <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
            <label class="form-label" for="descricao">Informe a Descrição</label>
        </div>
        
        <button type="submit" class="btn btn-success btn-block mb-4">Cadastrar</button>
    </form>
</div>