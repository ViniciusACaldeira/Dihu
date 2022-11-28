<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto mt5">
            <form method="POST">

                <div class="card ">

                    <h5 class="card-header info-color black-text text-center pink lighten-3">
                        <strong>Cadastre-se</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">

                        <form class="text-center" style="color: #757575;" method="POST">

                            <div class="form-row">
                                <div class="col">
                        
                                    <div class="md-form">                                
                                        <input type="text" id="nome" name="nome" class="form-control">
                                        <label for="nome"><i class="far fa-address-card"></i>  Nome</label>
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="md-form">
                                        <input type="text" id="sobrenome"  name="sobrenome" class="form-control">
                                        <label for="sobrenome"><i class="far fa-address-card"></i>  Sobrenome</label>
                                    </div>
                                </div>
                            </div>

                            <div class="md-form mt-0">
                                <input type="email" id="email"  name="email" class="form-control">
                                <label for="email"><i class="far fa-envelope"></i>  E-mail</label>
                            </div>

                            <div class="md-form">
                                <input type="password" id="senha"  name="senha" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                                <label for="senha"><i class="fas fa-key"></i>  Senha</label>
                            </div>

                            <div class="md-form">
                                <input type="text" id="telefone"  name="telefone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                                <label for="telefone"><i class="fas fa-phone"></i>  Telefone</label>
                            </div>

                            <div class="form-row">
                                <div class="col">
                        
                                    <div class="md-form">
                                        <input type="text" id="endereco"  name="endereco" class="form-control">
                                        <label for="endereco"><i class="fas fa-road"></i>  Endereço</label>
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="md-form">
                                        <input type="text" id="numero"  name="numero" class="form-control">
                                        <label for="numero"><i class="far fa-circle"></i>  Número</label>
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <input type="text" id="cep"  name="cep" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                                <label for="cep"><i class="fas fa-city"></i>  Cep</label>
                            </div>
                            
                            <button class="btn btn-outline-pink btn-rounded btn-block my-6 waves-effect z-depth-0" type="submit" content="Cadastrar" 
                            href="#modal_cadastro" data-toggle="modal" data-target="#modal_cadastro">Cadastrar</button>
                            <hr>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>