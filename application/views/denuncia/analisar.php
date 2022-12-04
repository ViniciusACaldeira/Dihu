<h1 class="titulo">Analisar Denuncias</h1>

<div class="content">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Direito Humano</th>
                <th>Anônimo</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php foreach( $dados as $linha): ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?= $linha->direitoHumano ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-<?= $linha->anonimo ? "success" : "danger" ?> rounded-pill d-inline"><?= $linha->anonimo ? "sim": "não" ?></span>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?= $linha->data ?></p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?= $linha->descricao ?></p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?= $linha->statusNome ?></p>
                        </td>
                        <td>
                        <div class="dropdown">
                            <button type="button" 
                                    class="btn dropdown-toggle btn-sm btn-rounded" 
                                    id="dropdownAcao"
                                    data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                Ações
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownAcao">
                                <?php if( $linha->usuario == 1 && $linha->status == 1 ): ?>
                                    <li><a class="dropdown-item" href="<?= base_url("denuncie/alterarStatus/$linha->id/3"); ?>">Alterar para Cancelado</a></li>
                                <?php elseif( !$linha->usuario ): ?>
                                    <li><a class="dropdown-item" href="<?= base_url("denuncie/alterarStatus/$linha->id/2"); ?>">Marcar como Visto</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
          </table>
    </div>