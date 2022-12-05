<div class="modal fade top in show" id="modalCadastradoSucessoOuNao" tabindex="-1" role="dialog" aria-labelledby="modalCadastradoSucessoOuNao"
                        aria-hidden="true">
    <div class="modal-dialog modal-notify modal-frame modal-top modal-<?= $resultado->status == 1 ? "success" : "danger" ?>" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">
                <p class="pt-3 pr-2">
                    <?php $resultado->mensagem ?>
                </p>
                <button type="button" class="btn btn-outline-<?= $resultado->status == 1 ? "success" : "danger" ?> waves-effect" data-mdb-dismiss="modal">Entendido!</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#modalCadastradoSucessoOuNao").modal("show");
    })
</script>