<h1 class="titulo">Analisar Denuncias</h1>

<div class="content">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Direito Humano</th>
                <th>Anônimo</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Ação</th>
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
                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                Alterar
                            </button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
          </table>
    </div>