<?php

    include 'fachada.php'; 

    // constroi o objeto subcategoria e marca

    $cat_encontrada = false;
    $cnpj_fornecedor = explode("=", $_SERVER['REQUEST_URI'])[1];

    $dao = $factory->getFornecedorDao();
    $fornecedor = $dao->buscaPorCNPJ($cnpj_fornecedor);

 ?>

<div id = "detalhes_produto" class = "row d-flex justify-content-center border border-dark" > <!-- bg-secondary -->

    <div id = "fotos-categorias" class = "row mt-2 w-75 me-5 ms-3" >

        <div id = "geral-categorias-conta" class = "col-xl-8 ms-4 h-100 border border-dark " > <!-- bg-primary -->

            <div id = "geral-bot-conta" class = "row h-100 border border-dark justify-content-start "> <!-- bg-danger -->

                <div id = "categoria" class = "col-sm-12 col-lg-1 col-xl-1 mb-2 mt-3  ms-3 bg-light"> <!-- bg-warning -->

                    <div class="row h-25 bg-primary border border-dark" >


                        <div class = "col-12 col-sm-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" > 

                            <b class = "" > GERENCIAR </b> 

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start me-2  border border-dark bg-light" >

                            <a href = "listagem_produtos.php?=1" class = "conta " > Produtos </a>

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light">

                            <a href = "listagem_fornecedor.php?=1" class = "conta" > Fornecedores </a>

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" >

                            <a href = "#" class = "conta"> Usuários </a>

                        </div> 

                    </div>

                </div>
    
                <div id = "menu-fotos-conta" class = "col-xl-10 border border-dark mt-3 ms-3 me-3" >
            
                    <div id = "foto" class = "row  mt-1 ">

                        <div class="container py-3 ">
	
                            <div class="bg-primary" role="document">

                                <div class="modal-content rounded-5 shadow">

                                    <div class="modal-header p-6 pb-1 ">
                                
                                        <h4 class="fw-bold mb-0">Alteração de Fornecedores</h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x content-area" method = "post" enctype="multipart/form-data" >
                                
                                        <section>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="text" name = "social" placeholder="Razão Social"
                                                           class="form-control" value = "<?= $fornecedor->getSocial(); ?>" 
                                                        maxlength="60" title = "Razão Social"  required 
                                                    >

                                                </div>

                                                <div class = "col-12 col-md-4 col-lg-4 col-xl-3 mt-1 text-warning" >
                                                    
                                                    <input type="text" name = "fantasia" placeholder="Nome Fantasia"
                                                           class="form-control" value = "<?= $fornecedor->getFantasia(); ?>" 
                                                        maxlength="60" title = "Nome Fantasia" required 
                                                    >

                                                </div>

                                                <div class = "col-12 col-md-3 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="text" name = "cnpj" placeholder="CNPJ"
                                                            class="form-control" value = "<?= $fornecedor->getCNPJ(); ?>" 
                                                        title = "CNPJ" maxlength="14" required 
                                                    >

                                                </div>

                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="text" name = "email" placeholder="Email"
                                                           class="form-control" value = "<?= $fornecedor->getEmail(); ?>"
                                                        title = "Email" maxlength="55" required 
                                                    >

                                                </div>

                                                <div class = "col-12 col-md-4 col-lg-4 col-xl-3 mt-1 text-danger"> 

                                                    <select class="form-select" name = "provedor" title = "Provedor" >

                                                        <option disabled='disabled' value="@Provedor" >Provedor</option>

                                                        <?php 

                                                            $arr_provedores = array(

                                                                "@gmail.com", "@yahoo.com.br", "@outlook.com.br", "@hotmail.com", "@protonmail.com"
                                                            
                                                            );

                                                            foreach($arr_provedores as $provedor_atual){

                                                                $provedor = $fornecedor->getProvedor();

                                                                if($provedor_atual == $provedor){

                                                                    echo "<option selected='true' value = '{$provedor_atual}' >{$provedor_atual}</option>";

                                                                } else {

                                                                    echo "<option value = '{$provedor_atual}' >{$provedor_atual}</option>";

                                                                }

                                                            }
                                                            
                                                        ?>

                                                    </select>

                                                </div>

                                                <div class = "col-12 col-md-3 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="text" name = "ie" placeholder="IE Inscrição Estadual"
                                                            class="form-control" value = "<?= $fornecedor->getIE(); ?>" 
                                                        title = "Inscrição Estadual IE" maxlength="11" required 
                                                    >

                                                </div>

                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="text" name = "telefone" placeholder="Telefone"
                                                            class="form-control" value = "<?= $fornecedor->getTelefone(); ?>" 
                                                        title = "Telefone" maxlength="11" required 
                                                    >

                                                </div>

                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-12 col-lg-12 col-xl-12 mt-3 text-danger">

                                                    <span class="h-100" name = "msg">

                                                        <?php 

                                                            if(isset($_POST['enviar'])){

                                                                echo $dao->altera($fornecedor);
																
																if ($dao->altera($fornecedor) == "Fornecedor alterado com sucesso !") {	
																echo "<script>alert('Fornecedor alterado com sucesso');</script>"; 
																echo "<meta http-equiv='refresh' content='0, url=listagem_fornecedor.php?=1'>";  
																}
                                                            }
															
															
															 
                                                        ?>
														

                                                    </span>

                                                </div>
                                            
                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 text-danger h-100">

                                                    <button name = "enviar"  type="submit" class="btn btn-sm btn-success w-100 mt-2 mb-2"> 

                                                        Alterar 

                                                    </button>

                                                </div>

                                            </div>
                                    
                                        </section>

                                    </form>
                                
                                </div>
                                
                            </div>

                        </div>

                        <hr class="featurette-divider">                                               

                    </div>

                </div>

            </div>
        
        </div>

    </div><?php include 'footer.php'; ?>

</div>