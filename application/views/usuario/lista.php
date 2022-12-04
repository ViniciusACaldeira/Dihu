<h1 class="titulo">Usuários</h1>

<div class="content">

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
            <th>Nome</th>
            <th>Data de Ingresso</th>
            <th>Participante de Eventos</th>
            <th>Administrador</th>
            <th></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach( $dados as $linha): ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                src="https://i.pinimg.com/564x/97/3c/d7/973cd7abb9925c0c4cb0e392319373a3.jpg"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                            <p class="fw-bold mb-1"><?= $linha->nome ?></p>
                            <p class="text-muted mb-0"><?= $linha->email?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?= $linha->data?></p>
                        </td>
                    <td>
                        <span class="badge badge-<?= $linha->participante ? "success" : "warning" ?> rounded-pill d-inline"><?= $linha->participante ? "sim" : "não" ?></span>
                    </td>
                    <td>
                        <span class="badge badge-<?= $linha->admin ? "success" : "danger" ?> rounded-pill d-inline"><?= $linha->admin ? "sim" : "não" ?></span>
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
                                <li><a class="dropdown-item" href="<?= base_url("usuario/alterarFuncao/$linha->id"); ?>">Alterar função</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>