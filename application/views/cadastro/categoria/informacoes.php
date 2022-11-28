<h1 class="tituloCadastro">Cadastrar Informações - Direito Humano</h1>

<div class="contentCadastro">
    <form method="POST">
    
        <select required="required" id="subCategoria" name="subCategoria" class="form-select">
            <option selected value="0">Selecione a sub categoria</option>
            <?php foreach( $subCategorias as $linha): ?>
            <option value="<?= $linha->id?>"><?= $linha->nome ?></option>
            <?php endforeach;?>
        </select>

        <div class="form-outline mb-4 mt-4">
            <input required="required" type="text" id="titulo" name="titulo" class="form-control" />
            <label class="form-label" for="titulo" name="titulo">Titulo</label>
        </div>

        <div class="form-outline mb-4">
            <input required="required" type="text" id="links" name="links" class="form-control" />
            <label class="form-label" for="links" name="links">Links</label>
        </div>

        <div class="form-outline mb-4">
            <textarea class="form-control" id="descricao" rows="4"></textarea>
            <label class="form-label" for="descricao">Conteudo a ser exibido</label>
        </div>

        <button type="submit" class="btn btn-success btn-block mb-4">Cadastrar</button>
    </form>
</div>