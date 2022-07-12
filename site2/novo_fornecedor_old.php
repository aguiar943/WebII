<?php

    include 'fachada.php'; 

    // constroi o objeto subcategoria e marca

    $dao = $factory->getFornecedorDao();

 ?>

<div id = "detalhes_produto" class = "row d-flex justify-content-center border border-dark h-100" > <!-- bg-secondary -->

    <div id = "fotos-categorias" class = "row mt-2 w-75 me-5 ms-3" >

        <div id = "geral-categorias-conta" class = "col-xl-8 ms-4 h-100 border border-dark " > <!-- bg-primary -->

            <div id = "geral-bot-conta" class = "row h-100 border border-dark d-flex justify-content-center "> <!-- bg-danger -->

                <div id = "categoria" class = "col-xl-1 mb-2 mt-3 ms-2"> <!-- bg-warning -->

                    <div class="w-100 me-5 border border-dark p-1 bg-cat" > <!-- bg-sucess -->

                        <div class = "center-flx border border-dark justify-content-start " > 

                            <b class = "ms-3" > GERENCIAR </b> 

                        </div>

                        <div class = "center-flx border border-dark" >

                            <a href = "listagem_produtos.php" class = "conta" >Produtos </a>

                        </div>

                        <div class = "center-flx border border-dark">

                            <a href = "listagem_fornecedor.php" class = "conta" > Fornecedores </a>

                        </div>

                        <div class = "center-flx border border-dark " >

                            <a href = "#" class = "conta"> Teclados </a>

                        </div>                      

                    </div>

                </div>
    
                <div id = "menu-fotos-conta" class = "col-xl-10 border border-dark mt-3 ms-2" ><!-- bg-secondary -->

                    <!-- Fim Mauricio -->
            
                    <div id = "foto" class = "row ms-1 me-1 mt-3">
                        
                        <!-- Inicio Rodrigo -->

                        <div class="container py-3">

                            <div class="" role="document">

                                <div class="modal-content rounded-5 shadow">

                                    <div class="modal-header p-6 pb-4 border-bottom-0">

                                        <h4 class="fw-bold mb-0">Cadastro Fornecedores</h4>

                                    </div>

                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x " method = "post"  >

                                        <div class="form-floating cadastro-conta-h mb-4">

                                            <div class="row">

                                                <div class="form-group col-md-4">

                                                    <input type="text" class="form-control" name = "social" placeholder="Razão Social" maxlength="60" required>

                                                </div>

                                                <div class="form-group col-md-4">

                                                    <input type="text" class="form-control" name = "fantasia" placeholder="Nome Fantasia"  maxlength="60" required>

                                                </div>
                                                
                                            </div>

                                        </div>

                                        <div class="form-floating mt-2 mb-3 cadastro-conta-h">

                                            <div class="row mt-4 ">

                                                <div class="form-group col-md-4">

                                                    <input type="text" class="form-control" name = "email" placeholder="E-mail" maxlength="55" required>

                                                </div>

                                                <div class="form-group col-md-4">

                                                    <select class="form-select" name = "provedor" >

                                                        <option value="@Provedor" selected>@Provedor</option>
                                                        <option value = "@gmail.com" >@gmail.com</option>
                                                        <option value = "@outlook.com.br" >@outlook.com.br</option>
                                                        <option value = "@outlook.com" >@outlook.com</option>
                                                        <option value = "@yahoo.com.br" >@yahoo.com.br</option>
                                                        <option value = "@hotmail.com" >@hotmail.com</option>
                                                        <option value = "@protonmail.com" >@protonmail.com</option>

                                                    </select>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-floating mb-3 mt-2  cadastro-conta-h">

                                            <div class="row mt-4">

                                                <div class="form-group col-md-2">

                                                    <input type="text" class="form-control" name = "cnpj" placeholder="CNPJ"  maxlength="14" required>

                                                </div>

                                                <div class="form-group col-md-2">

                                                    <input type="text" class="form-control" name = "ie" placeholder="Inscrição Estadual"  maxlength="11" required>

                                                </div>

                                                <div class="form-group col-md-4">

                                                    <input type="text" class="form-control" name = "telefone" placeholder="Telefone" maxlength="11" required>

                                                </div>

                                               

                                            </div>

                                        </div>

                                        <div class="form-floating mb-3 mt-4">

                                            <div class="form-group col-md-8">

                                                <button name = "envd"  type="submit" class="btn btn btn-sm btn-success w-100 cadastro-conta-h"> Cadastrar </button>

                                            </div>

                                        </div>

                                        <div class="form-floating mb-3 cadastro-conta-h">

                                            <div class="row">

                                                <div class="form-group col-md-12">

                                                    <span class="h-100" name = "msg">

                                                        <?php 

                                                            echo $dao->insere(null);
                                                        
                                                        ?>

                                                    </span>

                                                </div>

                                            </div>

                                        </div>
                                        
                                        <br> <br>

                                    </form>

                                </div>

                            </div>

                        </div>

                        <hr class="featurette-divider">                                               

                    </div>

                </div>

            </div>
        
        </div>

    </div>

</div>
<?php include 'footer.php'; ?>




