<?php

    include 'fachada.php'; 

    $dao = $factory->getProdutoDao();

 ?>

<div id = "detalhes_produto" class = "row d-flex justify-content-center border border-dark h-100" > <!-- bg-secondary -->

    <div id = "fotos-categorias" class = "row mt-2 w-75 me-5 ms-3" >

        <div id = "geral-categorias-conta" class = "col-xl-8 ms-4 h-100 border border-dark " > <!-- bg-primary -->

            <div id = "geral-bot-conta" class = "row h-100 border border-dark d-flex justify-content-center "> <!-- bg-danger -->

                <div id = "categoria" class = "col-xl-1 mb-2 mt-3 ms-2"> <!-- bg-warning -->

                    <div class="me-5 border border-dark p-1 bg-cat" > <!-- bg-sucess -->

                        <div class = "center-flx border border-dark justify-content-start " > 

                            <b class = "ms-3" > GERENCIAR </b> 

                        </div>

                        <div class = "center-flx border border-dark" >

                            <a href = "listagem_produtos.php" class = "conta" > Produtos </a>

                        </div>

                        <div class = "center-flx border border-dark">

                            <a href = "listagem_fornecedor.php" class = "conta" > Fornecedores </a>

                        </div>

                        <div class = "center-flx border border-dark " >

                            <a href = "listagem_fornecedores.php" class = "conta" >Teclados </a>

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
                                
                                        <h4 class="fw-bold mb-0"> Listagem de Fornecedores </h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x">
                                
                                        <section>
                                    
                                            <?php

                                            $dao = $factory->getFornecedorDao();
                                            $fornecedores = $dao->buscaTodos();

                                            if($fornecedores) { ?>

                                                <table class='table table-hover table-responsive table-bordered w-75'>

                                                    <tr>

                                                        <th> Nome Fantasia </th>
                                                        <th> CNPJ </th>
                                                        <th> Telefone </th>
                                                        <th> Opções </th>

                                                    </tr>

                                                    <?php

                                                    foreach ($fornecedores as $fornecedor) {

                                                        extract($fornecedor); ?>

                                                        <tr>

                                                            <td class = "listg-col-w"> <?= $fo_fantasia; ?> </td>
                                                            <td class = "listg-col-w" > <?= $fo_cnpj; ?> </td>
                                                            <td class = "listg-col-w"> <?= $fo_telefone; ?> </td>

                                                            <td class = "listg-col-w" > 

                                                                <a href='mostra_fornecedor.php?id=<?= $id ?>' class='btn btn-primary left-margin'>

                                                                    <span class='glyphicon glyphicon-list'></span> Visualizar

                                                                </a>

                                                                <a href='altera_fornecedor.php?fornecedor=<?= $id; ?>' class='btn btn-info left-margin ms-2'>

                                                                    <span class='glyphicon glyphicon-edit'></span> Alterar

                                                                </a>

                                                                <a href='remove_produto.php?id=<?= $id ?>' class='btn btn-danger left-margin ms-2'
                                                                    onclick = "return confirm('Confirma exclusão do fornecedor?')"   
                                                                >

                                                                    <span class='glyphicon glyphicon-remove'></span> Excluir

                                                                </a>

                                                            </td>

                                                        </tr> <?php

                                                    } ?>
                                                </table> <?php
                                            } ?>
                                            <a href='novo_fornecedor.php' class='btn btn btn-success left-margin'> Novo </a>
                                    
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

    </div>

</div>
<?php include 'footer.php'; ?>




