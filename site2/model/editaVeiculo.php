<?php

    include_once "fachada.php";

    $id = @$_GET["id"];

    $dao = $factory->getVeiculoDao();

    $veiculo = $dao->buscaPorId($id);

    if($veiculo==null) {

        $veiculo = new Veiculo(null,null, null, null, null, null);

    }

?>

<!-- 
    <body>
-->
        <div class="container">

            <main>

                <div class="py-5 text-center">

                <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                
                <h2>Checkout form</h2>
                
                <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                </div>

                <div class="row g-5">
                    
                    <div class="col-md-12 col-lg-12">

                        <h4 class="mb-3">Cadastro de Veículos</h4>

                        <hr>

                        <form class="needs-validation" action = "salvaVeiculo.php" method=post>

                            <div class="row g-3">

                                <div class="col-md-1 col-lg-1">

                                    <label for="firstName" class="form-label">Id</label>

                                    <input type="text" class="form-control" id="firstName" name = "id" placeholder="<?= $id ?>" value="<?=$veiculo->getId()?>" required>

                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>

                                </div>

                                

                                <div class="col-md-3 col-lg-3">

                                    <label for="lastName" class="form-label">Marca</label>

                                    <input type="text" class="form-control" id="lastName"  name="marca" placeholder="" value="<?=$veiculo->getMarca()?>" required>

                                    <div class="invalid-feedback">
                                        Valid last name is required.

                                    </div>

                                </div>

                                <div class="col-md-3 col-lg-3">

                                    <label for="lastName" class="form-label">Nome</label>

                                    <input type="text" class="form-control" id="lastName" name="nome" placeholder="" value="<?=$veiculo->getNome()?>" required>

                                    <div class="invalid-feedback">
                                        Valid last name is required.

                                    </div>

                                </div>

                                <div class="col-12 col-md-1">

                                    <label for="lastName" class="form-label">Motor</label>

                                    <input type="text" class="form-control" id="lastName" name="motor" placeholder="" value="<?=$veiculo->getMotor()?>" required>

                                    <div class="invalid-feedback">
                                        Valid last name is required.

                                    </div>

                                </div>

                                <div class="col-12 col-md-2">

                                    <label for="lastName" class="form-label">Ano</label>

                                    <input type="text" class="form-control" id="lastName" name="ano" placeholder="" value="<?=$veiculo->getAno()?>" required>

                                    <div class="invalid-feedback">
                                        Valid last name is required.

                                    </div>

                                </div>

                                <div class="col-12">

                                    <label for="lastName" class="form-label">Cor</label>

                                    <input type="text" class="form-control" id="lastName" name="cor" placeholder="" value="<?=$veiculo->getCor()?>" required>

                                    <div class="invalid-feedback">
                                        Valid last name is required.

                                    </div>

                                </div>

                                <hr>

                                <div class="col-sm-6">

                                    <input type= "submit" class = "w-50 btn btn-primary btn-lg" value = "Enviar" />

                                </div>

                                <div class="col-sm-6 ">

                                    <a href="veiculo.php" class = "w-50 btn btn-primary btn-lg ms-5" >Voltar</a>
                                    
                                </div>

                            </div>

                        </form>
                        
                    </div>

                </div>

            </main>

            <footer class="my-5 pt-5 text-muted text-center text-small">

                <p class="mb-1">&copy; 2017–2021 Company Name</p>
                <ul class="list-inline">

                <li class="list-inline-item"><a href="#">Privacy</a></li>

                <li class="list-inline-item"><a href="#">Terms</a></li>

                <li class="list-inline-item"><a href="#">Support</a></li>

                </ul>

            </footer>

        </div>

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script>

        <br>

    </body>

</html>