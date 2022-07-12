<?php

    include 'fachada.php'; 

    $dao = $factory->getProdutoDao();

    $count = 0;
    $dao = $factory->getProdutoDao();
    $produtos = $dao->buscaTodos();

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
    
                <div id = "menu-fotos-conta" class = "col-xl-10 border border-dark mt-3 ms-3 me-3 " ><!-- bg-secondary -->

                    <!-- Fim Mauricio -->
            
                    <div id = "foto" class = "row  mt-1 ">

                        <!-- Inicio Rodrigo -->

                        <div class="container py-3 ">
	
                            <div class="bg-primary" role="document">

                                <div class="modal-content rounded-5 shadow ">

                                    <div class="modal-header p-6 pb-1 ">
                                
                                        <h4 class="fw-bold mb-0">Pedidos</h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x content-area h-100">
                                
                                        <section>
                                    
                                            <?php

                                            if($produtos) { ?>

                                                <?php

                                                /*foreach ($produtos as $produto) {

                                                    extract($produto); */
                                                    

                                                    ?>

                                                        <!-- Pedido 1 -->

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-8 col-lg-8 col-xl-9 fw-bold ">Pagamento Pendente</div>

                                                            <div class = "col-12 col-md-4 col-lg-4 col-xl-3 fw-bold d-flex justify-content-center "> Total: RS 1200,00 </div>


                                                        </div>

                                                        

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center justify-content-center ">
                                                                
                                                                <i class="fa-solid fa-pencil mb-3 mt-3"></i>

                                                            </div>

                                                            <div class = "col-12 col-md-5 col-lg-6 col-xl-7" > 

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >Placa de Vídeo</span>


                                                                </div>

                                                                <div class="row">

                                                                    <span class="mt-1 mb-1">GTX 1050 NVÍDIA</span>

                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 mt-1 mb-1 d-flex justify-content-center" > 

                                                                <a href='mostra_fornecedor.php?id=<?= 1 ?>' 
                                                                    class='btn btn-pedido justify-content-center d-flex align-items-center fw-bold h-75 w-75 mt-1' 
                                                                    title="Visualizar"
                                                                >

                                                                    Pagar

                                                                </a>
                                                            
                                                            </div>

                                                        </div>


                                                        <!-- Pedido 2 -->

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-8 col-lg-8 col-xl-9 fw-bold">Pagamento Pendente</div>

                                                            <div class = "col-12 col-md-4 col-lg-4 col-xl-3 fw-bold d-flex justify-content-center "> Total: RS 600,50 </div>


                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center justify-content-center ">
                                                                
                                                                <i class="fa-solid fa-pencil mb-3 mt-3"></i>

                                                            </div>

                                                            <div class = "col-12 col-md-5 col-lg-6 col-xl-7" > 

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >Monitor</span>


                                                                </div>

                                                                <div class="row">

                                                                    <span class="mt-1 mb-1">22B1HM5 AOC</span>

                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 mt-1 mb-1 d-flex justify-content-center" > 

                                                                <a href='mostra_fornecedor.php?id=<?= 1 ?>' 
                                                                    class='btn btn-pedido justify-content-center d-flex align-items-center fw-bold h-75 w-75 mt-1' 
                                                                    title="Visualizar"
                                                                >

                                                                    Pagar

                                                                </a>
                                                            
                                                            </div>

                                                        </div>

                                                        <!-- Pedido 3 -->

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-8 col-lg-8 col-xl-9 fw-bold">Pagamento Pendente</div>

                                                            <div class = "col-12 col-md-4 col-lg-4 col-xl-3 fw-bold d-flex justify-content-center "> Total: RS 300,00 </div>


                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center justify-content-center ">
                                                                
                                                                <i class="fa-solid fa-pencil mb-3 mt-3"></i>

                                                            </div>

                                                            <div class = "col-12 col-md-5 col-lg-6 col-xl-7" > 

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >Tênis</span>


                                                                </div>

                                                                <div class="row">

                                                                    <span class="mt-1 mb-1">Shox NIKE</span>

                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 mt-1 mb-1 d-flex justify-content-center" > 

                                                                <a href='mostra_fornecedor.php?id=<?= 1 ?>' 
                                                                    class='btn btn-pedido justify-content-center d-flex align-items-center fw-bold h-75 w-75 mt-1' 
                                                                    title="Visualizar"
                                                                >

                                                                    Pagar

                                                                </a>
                                                            
                                                            </div>

                                                        </div>


                                                     <?php

                                                    $count++;

                                                /* } */ ?>
                                                
                                                <?php
                                            } 

                                            ?>

                                            <a href='listagem.php' class='btn btn btn-success left-margin mt-3'> Voltar </a>
                                    
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





