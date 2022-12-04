<h1 class="titulo">Denuncie</h1>


<div class="content">
    <form method="POST">
        <select required="required" id="categoria" name="categoria" class="form-select">
            <option selected value="0">Selecione o Direito Humano</option>
            <?php foreach( $categorias as $linha): ?>
                <option value="<?= $linha->id?>"><?= $linha->nome ?></option>
            <?php endforeach;?>
        </select>

        <div class="form-check d-flex mb-4 mt-4">
            <input class="form-check-input me-2" type="checkbox" name="anonimo" value="1" id="anonimo" checked />
            <label class="form-check-label" for="anonimo">
                Anônimo
            </label>
        </div>

        <div class="form-outline mb-4">
            <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
            <label class="form-label" for="descricao">Descrição</label>
        </div>
        
        <button type="submit" class="btn btn-danger btn-block mb-4">DENUNCIAR</button>
        
    </form>
</div>