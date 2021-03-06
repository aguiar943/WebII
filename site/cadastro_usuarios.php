<?php

    include 'fachada.php'; 

    $dao = $factory->getUsuarioDao();

 ?>

<div id = "detalhes_produto" class = "row d-flex justify-content-center " > <!-- bg-secondary -->

            <div id = "geral-bot-conta" class = "row h-100  justify-content-start "> <!-- bg-danger -->

                <div id = "categoria" class = "col-sm-12 col-lg-1 col-xl-1 mb-2 mt-3  ms-3 bg-light"> <!-- bg-warning -->
                
            </div>
    
                <div id = "menu-fotos-conta" class = "col-xl-10  mt-3 ms-3 me-3" ><!-- bg-secondary -->

                    <!-- Fim Mauricio -->
            
                    <div id = "foto" class = "row  mt-1 ">

                        <!-- Inicio Rodrigo -->

                        <div class="container">
	
                            <div class="bg-primary" role="document">

                                <div class="modal-content rounded-5 shadow">

                                    <div class="modal-header p-6 pb-1 ">
                                
                                        <h4 class="fw-bold mb-0">Produtos </h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x content-area">
                                
                                        <section>
                                    
                                            <?php

											$dao = $factory->getUsuarioDao();
											$usuarios = $dao->buscaTodosNovo();

                                            if($usuarios) { ?>

                                                <div class = "row  ">

                                                    <div class = "col-4 col-md-3 col-lg-2 col-xl-2 d-flex justify-content-start" >CPF</div>
                                                    <div class = "col-8 col-md-4 col-lg-3 col-xl-3 d-flex justify-content-start "> Nome</div>

                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1"></div>
                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1 ms-5"></div>
                                                    <div class = "col-1 col-md-2 col-lg-1 col-xl-1 ms-4"></div>

                                                </div>

                                                <?php

                                                foreach ($usuarios as $usuario) {

                                                    extract($usuario); ?>

                                                    <div class = "row  ">

                                                        <div class = "col-12 col-md-3 col-lg-2 col-xl-2 "> <?= $us_cpf; ?> </div>
                                                        <div class = "col-12 col-md-4 col-lg-3 col-xl-3 text-warning" > <?= $us_nome; ?> </div>
                                    
                                                        <div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center"  > 

                                                            <a href='modifica_usuario?cpf=<?=$us_cpf; ?>' class='btn btn-info left-margin ms-1 justify-content-center' title="Alterar">

                                                                <i class="fa-solid fa-pencil"></i>

                                                            </a>

                                                        </div>

                                                        <div class = "col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1 mt-1 mb-1 d-flex justify-content-center" > 

                                                            <a href='remove_usuario.php?cpf=<?= $us_cpf ?>' class='btn btn-danger left-margin ms-1 justify-content-center'
                                                                onclick = "return confirm('Confirma exclus??o do usu??rio?')" title="Excluir"   
                                                            >

                                                                <i class="fa-solid fa-trash-can"></i>

                                                            </a>

                                                        </div>

                                                    </div>
                                                     <?php

                                                } ?>
                                                <?php
                                            } ?>
                                            <a href='cadastro.php' class='btn btn btn-success left-margin mt-3'> Novo </a>
                                    
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
