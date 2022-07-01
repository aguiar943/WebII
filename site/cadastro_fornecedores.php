<?php

    include 'fachada.php'; 

    $numero_pg = explode("=", $_SERVER['REQUEST_URI'])[1];

    $dao = $factory->getProdutoDao();

    $fornecedores = $dao->buscaTodos();

    $arr_fornecedores = array();
	
    $count_fornecedores = 0;

 ?>

<div id = "detalhes_produto" class = "row d-flex justify-content-center " >

            <div id = "geral-bot-conta" class = "row h-100  justify-content-start ">

                <div id = "categoria" class = "col-sm-12 col-lg-1 col-xl-1 mb-2 mt-3  ms-3 bg-light">
                </div>
    
                <div id = "menu-fotos-conta" class = "col-xl-10  mt-3 ms-3 me-3" >
            
                    <div id = "foto" class = "row  mt-1 ">

                        <div class="container">
	
                            <div class="bg-primary" role="document">

                                <div class="modal-content rounded-5 shadow">

                                    <div class="modal-header p-6 pb-1 ">
                                
                                        <h4 class="fw-bold mb-0">Fornecedores </h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x content-area">
                                
                                        <section>
										
											<div class = "row  ">
											
												<div class = "col-11 col-md-8 col-lg-7 col-xl-7 d-flex justify-content-start" > 
													
													<input type="text" name = "palavra" placeholder="Pesquisar"
                                                        class="form-control mt-2 mb-2" maxlength="60"
                                                    >
													<button class="btn btn-outline-info mt-2 mb-2 ms-2" id="buscar" type="button">Buscar</button>
													
													<!--
													<script>
													
														function buscar(palavra)
														{
															//O método $.ajax(); é o responsável pela requisição
															$.ajax
																({
																	//Configurações
																	type: 'POST',//Método que está sendo utilizado.
																	dataType: 'php',//É o tipo de dado que a página vai retornar.
																	url: 'busca_fornecedor.php',//Indica a página que está sendo solicitada.
																	//função que vai ser executada assim que a requisição for enviada
																	beforeSend: function () {
																		$("#dados").html("Carregando...");
																	},
																	data: {palavra: palavra},//Dados para consulta
																	//função que será executada quando a solicitação for finalizada.
																	success: function (msg)
																	{
																		$("#dados").html(msg);
																	}
																});
														}
														
														$('#buscar').click(function () {
															buscar($("#palavra").val())
														});
														
													</script>
													-->
													
												</div>
											
											</div>
                                    
                                            <?php

                                            if($fornecedores) { ?>

                                                <div class = "row  ">

                                                    <div class = "col-5 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-start" > Nome </div>
                                                    <div class = "col-4 col-md-4 col-lg-3 col-xl-3 d-flex justify-content-start">CNPJ</div>
                                                    <div class = "col-3 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-start"> Tel </div>

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
						
						   if(Paginacao::itemPertencePaginaAtual($numero_pg, $count_fornecedores)){ ?>

							    <div class = "row  ">

								<div class = "col-12 col-md-4 col-lg-2 col-xl-2 "> <?= $fo_fantasia; ?> </div>
								<div class = "col-12 col-md-4 col-lg-3 col-xl-3 text-warning" > <?= $fo_cnpj; ?> </div>
								<div class = "col-12 col-md-4 col-lg-3 col-xl-3 text-danger"> <?= $fo_telefone; ?> </div>

								<div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center " > 

								    <a href='mostra_fornecedor.php?cnpj=<?= $fo_cnpj ?>' class='btn btn-primary justify-content-center' title="Visualizar">

									<i class="fa-solid fa-eye"></i>

								    </a>

								</div>

								<div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center"  > 

								    <a href='modifica_fornecedor.php?cnpj=<?= $fo_cnpj; ?>' class='btn btn-info left-margin ms-1 justify-content-center' title="Alterar">

									<i class="fa-solid fa-pencil"></i>

								    </a>

								</div>

								<div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center" > 

								    <a href='remove_fornecedor.php?cnpj=<?= $fo_cnpj ?>' class='btn btn-danger left-margin ms-1 justify-content-center'
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

                                                                    <a class="page-link" href="cadastro_fornecedores.php?=<?= $prev ; ?>" 
                                                                        aria-label="Previous" title="Anterior"
                                                                    >

                                                                        <span aria-hidden="true">&laquo;</span>

                                                                    </a>

                                                                </li>

                                                                <li class="page-item"><a class="page-link" href="cadastro_fornecedores.php?=1" title="Primeiro">1</a></li>

                                                                <li class="page-item"><a class="page-link" href="#"> - </a></li>

                                                                <li class="page-item">

                                                                    <a class="page-link" href="cadastro_fornecedores.php?=<?= $last_pg ;?>" title="Último">

                                                                        <?= $last_pg; ?>

                                                                    </a>
                                                                </li>

                                                                <li class="page-item">

                                                                    <a class="page-link" href="cadastro_fornecedores.php?=<?= $next ; ?>" 
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
                                            
                    </div>

                </div>

            </div>

   <?php include 'footer.php'; ?>

</div>





