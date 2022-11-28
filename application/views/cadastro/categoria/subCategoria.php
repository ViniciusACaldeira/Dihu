<h1 class="tituloCadastro">Cadastrar Sub Categoria - Direito Humano</h1>

<div class="contentCadastro">
    <form method="POST">
    
        <select required="required" id="categoria" name="categoria" class="form-select">
            <option selected value="0">Selecione a categoria</option>
            <?php foreach( $categorias as $linha): ?>
                <option value="<?= $linha->id?>"><?= $linha->nome ?></option>
            <?php endforeach;?>
        </select>

        <div class="form-outline mb-4 mt-4">
            <input required="required" type="text" id="nome" name="nome" class="form-control" />
            <label class="form-label" for="nome" name="nome">Nome da Sub Categoria Direito Humano</label>
        </div>

        <div class="form-outline mb-4">
            <textarea class="form-control" id="descricao" rows="4"></textarea>
            <label class="form-label" for="descricao">Descrição</label>
        </div>

        <button type="submit" class="btn btn-success btn-block mb-4">Cadastrar</button>
    </form>
</div>