<?php

    include 'fachada.php'; 

    $numero_pg = explode("=", $_SERVER['REQUEST_URI'])[1];

    

    $dao = $factory->getUsuarioDao();

    $usuarios = $dao->buscaTodos();

    $arr_usuarios = array();
	
	$count_usuarios = 0;

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

                            <a href = "listagem.php?=1" class = "conta" > Pedidos </a>

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
                                
                                        <h4 class="fw-bold mb-0">Usuários </h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x content-area">
                                
                                        <section>
                                    
                                            <?php

                                            if($usuarios) { ?>

                                                <div class = "row border border-dark ">

                                                    <div class = "col-4 col-md-3 col-lg-2 col-xl-2 d-flex justify-content-start" > Nome </div>
                                                    <div class = "col-8 col-md-4 col-lg-3 col-xl-3 d-flex justify-content-start">Email</div>
                                                    <div class = "col-4 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-start"> Telefone </div>
                                                    <div class = "col-3 col-md-3 col-lg-2 col-xl-2 d-flex justify-content-start"> RG </div>

                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1"></div>
                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1 ms-5"></div>
                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1 ms-4"></div>

                                                </div>

                                                <?php

                                                foreach ($usuarios as $usuario) {

                                                    extract($usuario); 

                                                    $arr_usuarios[] =  new Usuario(

                                                        $cpf, $email, $nome, $rg, $celular1, 
                                                        $celular2, $senha, $cartao

                                                    );

                                                    if(Paginacao::itemPertencePaginaAtual($numero_pg, $count_usuarios)){
                                                    
                                                        ?>

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 "> <?= $nome; ?> </div>
                                                            <div class = "col-12 col-md-4 col-lg-3 col-xl-3 text-warning" > <?= $email; ?> </div>
                                                            <div class = "col-12 col-md-2 col-lg-2 col-xl-2 text-danger"> <?= $celular2; ?> </div>
                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 text-danger"> <?= $rg; ?> </div>

                                                            <div class = "col-4 col-sm-4 col-md-2 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center " > 

                                                                <a href='mostra_usuario.php?id=<?= $id ?>' class='btn btn-primary justify-content-center' title="Visualizar">

                                                                    <i class="fa-solid fa-eye"></i>

                                                                </a>
                                                            
                                                            </div>

                                                            <div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center"  > 

                                                                <a href='altera_usuario.php?usuario=<?= $fo_cnpj; ?>' class='btn btn-info left-margin ms-1 justify-content-center' title="Alterar">

                                                                    <i class="fa-solid fa-pencil"></i>

                                                                </a>

                                                            </div>

                                                            <div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center" > 

                                                                <a href='remove_usuario.php?id=<?= $fo_cnpj ?>' class='btn btn-danger left-margin ms-1 justify-content-center'
                                                                    onclick = "return confirm('Confirma exclusão do usuario?')" title="Excluir"   
                                                                >

                                                                    <i class="fa-solid fa-trash-can"></i>

                                                                </a>

                                                            </div>

                                                        </div>
                                                        <?php

                                                    }

                                                    $count_usuarios++;

                                                }
                                                
                                                $prev = ( Paginacao::obterPaginaAnterior(intval($numero_pg - 1 )) );
                                                $last_pg = Paginacao::obterQtdPaginas($arr_usuarios);
                                                $next = (Paginacao::obterProximaPagina($numero_pg, $arr_usuarios, $last_pg));
                                                
                                                if($last_pg > 1){
                                                
                                                ?>

                                                    <div class = "row border border-dark ">

                                                        <div class = "col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center mt-3">

                                                            <nav aria-label="Page navigation example">

                                                                <ul class="pagination">

                                                                    <li class="page-item">

                                                                        <a class="page-link" href="listagem_usuarios.php?=<?= $prev ; ?>" 
                                                                            aria-label="Previous" title="Anterior"
                                                                        >

                                                                            <span aria-hidden="true">&laquo;</span>

                                                                        </a>

                                                                    </li>

                                                                    <li class="page-item"><a class="page-link" href="listagem_usuarios.php?=1" title="Primeiro">1</a></li>

                                                                    <li class="page-item"><a class="page-link" href="#"> - </a></li>

                                                                    <li class="page-item">

                                                                        <a class="page-link" href="listagem_usuarios.php?=<?= $last_pg ;?>" title="Último">

                                                                            <?= $last_pg; ?>

                                                                        </a>
                                                                    </li>

                                                                    <li class="page-item">

                                                                        <a class="page-link" href="listagem_usuarios.php?=<?= $next ; ?>" 
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

                                                }

                                            } ?>
                                            <a href='novo_usuario.php' class='btn btn btn-success left-margin mt-3'> Novo </a>
                                    
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