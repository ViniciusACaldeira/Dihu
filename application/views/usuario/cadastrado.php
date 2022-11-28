<div class="modal fade" id="modal_cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center text-warning" id="exampleModalLabel" ><i class="fas fa-user-alt"></i>CADASTRO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <h2 class="text-success">Cadastrado com Sucesso</h2>
      </div>

      <button type="button" class="btn btn-warning mr-8">Logar</button>
      <button type="button" class="btn btn-warning mr-8" href="<?= base_url('index.php/home/historia'); ?>">Voltar a Página Inicial</button>

      <div class="modal-footer">
        <p class="text-warning"> Esqueceu a senha? <a href="#">Clique Aqui</a></p>
      </div>
    </div>
  </div>
</div>