<?php

    include 'fachada.php'; 

    $numero_pg = explode("=", $_SERVER['REQUEST_URI'])[1];

    $dao = $factory->getProdutoDao();

    $dao = $factory->getFornecedorDao();

    $fornecedores = $dao->buscaTodos();

    $arr_fornecedores = array();
	
	$count_fornecedores = 0;

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

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" >

                            <a href = "listagem_produtos.php?=1" class = "conta" > Produtos </a>

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light">

                            <a href = "listagem_fornecedor.php?=1" class = "conta" > Fornecedores </a>

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" >

                            <a href = "listagem_usuarios.php?=1" class = "conta"> Usuários </a>

                        </div> 

                    </div>

                </div>
    
                <div id = "menu-fotos-conta" class = "col-xl-10 border border-dark mt-3 ms-3 me-3" ><!-- bg-secondary -->

                    <!-- Fim Mauricio -->
            
                    <div id = "foto" class = "row  mt-1 ">

                        <!-- Inicio Rodrigo -->

                        <div class="container py-3 ">
	
                            <div class="bg-primary" role="document">

                                <div class="modal-content rounded-5 shadow">

                                    <div class="modal-header p-6 pb-1 ">
                                
                                        <h4 class="fw-bold mb-0">Fornecedores </h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x content-area">
                                
                                        <section>
                                    
                                            <?php

                                            if($fornecedores) { ?>

                                                <div class = "row border border-dark ">

                                                    <div class = "col-5 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-start" > Razão Social </div>
                                                    <div class = "col-4 col-md-4 col-lg-3 col-xl-3 d-flex justify-content-start" > CNPJ</div>
                                                    <div class = "col-3 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-start" > Tel </div>

                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1"></div>
                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1 ms-5"></div>
                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1 ms-4"></div>

                                                </div>

                                                <?php

                                                foreach ($fornecedores as $fornecedor) {

                                                    extract($fornecedor); 

                                                    $arr_fornecedores[] =  new Fornecedor(

                                                        $fo_social, $fo_fantasia, $fo_cnpj,
                                                        $fo_ie, $fo_telefone, $fo_email

                                                    );

                                                    if(Paginacao::itemPertencePaginaAtual($numero_pg, $count_fornecedores)){
                                                    
                                                        ?>

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-4 col-lg-2 col-xl-2 "> <?= $fo_fantasia; ?> </div>
                                                            <div class = "col-12 col-md-4 col-lg-3 col-xl-3 text-warning" > <?= $fo_cnpj; ?> </div>
                                                            <div class = "col-12 col-md-4 col-lg-3 col-xl-3 text-danger"> <?= $fo_telefone; ?> </div>

                                                         <div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center"  > 

                                                                <a href='altera_fornecedor.php?fo_cnpj=<?= $fo_cnpj; ?>' class='btn btn-info left-margin ms-1 justify-content-center' title="Alterar">

                                                                    <i class="fa-solid fa-pencil"></i>

                                                                </a>

                                                            </div>

                                                            <div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center" > 

                                                                <a href='remove_fornecedor.php?cnpj=<?=$fo_cnpj ?>' class='btn btn-danger left-margin ms-1 justify-content-center'
                                                                    onclick = "return confirm('Confirma exclusão do fornecedor?')" title="Excluir"   
                                                                >

                                                                    <i class="fa-solid fa-trash-can"></i>

                                                                </a>

                                                            </div>

                                                        </div>
                                                        <?php

                                                    }

                                                    $count_fornecedores++;

                                                }
                                                
                                                $prev = ( Paginacao::obterPaginaAnterior(intval($numero_pg - 1 )) );
                                                $last_pg = Paginacao::obterQtdPaginas($arr_fornecedores);
                                                $next = (Paginacao::obterProximaPagina($numero_pg, $arr_fornecedores, $last_pg));
                                                
                                                
                                                ?>

                                                <div class = "row border border-dark ">

                                                    <div class = "col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">

                                                        <nav aria-label="Page navigation example">

                                                            <ul class="pagination">

                                                                <li class="page-item">

                                                                    <a class="page-link" href="listagem_fornecedor.php?=<?= $prev ; ?>" 
                                                                        aria-label="Previous" title="Anterior"
                                                                    >

                                                                        <span aria-hidden="true">&laquo;</span>

                                                                    </a>

                                                                </li>

                                                                <li class="page-item"><a class="page-link" href="listagem_fornecedor.php?=1" title="Primeiro">1</a></li>

                                                                <li class="page-item"><a class="page-link" href="#"> - </a></li>

                                                                <li class="page-item">

                                                                    <a class="page-link" href="listagem_fornecedor.php?=<?= $last_pg ;?>" title="Último">

                                                                        <?= $last_pg; ?>

                                                                    </a>
                                                                </li>

                                                                <li class="page-item">

                                                                    <a class="page-link" href="listagem_fornecedor.php?=<?= $next ; ?>" 
                                                                        aria-label="Next" title="Próximo"
                                                                    >

                                                                        <span aria-hidden="true">&raquo;</span>

                                                                    </a>

                                                                </li>

                                                            </ul>

                                                        </nav>
                                                    
                                                    </div>

                                                </div>

                                                <?php
                                            } ?>
                                            <a href='novo_fornecedor.php' class='btn btn btn-success left-margin mt-3'> Novo </a>
                                    
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





