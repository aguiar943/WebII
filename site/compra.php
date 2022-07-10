<?php

    include 'fachada.php'; 

    $dao = $factory->getProdutoDao();

    $count = 0;
    $dao = $factory->getProdutoDao();
    $produtos = $dao->buscaTodos();

 ?>

<div id = "detalhes_produto" class = "row d-flex justify-content-center border border-dark" > ->

    <div id = "fotos-categorias" class = "row mt-2 w-75 me-5 ms-3" >

        <div id = "geral-categorias-conta" class = "col-xl-8 ms-4 h-100 border border-dark " > 

            <div id = "geral-bot-conta" class = "row h-100 border border-dark justify-content-start "> 

                <div id = "categoria" class = "col-sm-12 col-lg-1 col-xl-1 mb-2 mt-3  ms-3 bg-light">

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
    
                <div id = "menu-fotos-conta" class = "col-xl-10 border border-dark mt-3 ms-3 me-3 " >
            
                    <div id = "foto" class = "row  mt-1 ">

                        <div class="container py-3 ">
	
                            <div class="bg-primary" role="document">

                                <div class="modal-content rounded-5 shadow ">

                                    <div class="modal-header p-6 pb-1 ">
                                
                                        <h4 class="fw-bold mb-0">Informações Envio</h4>
                                
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

                                                            <div class = "col-12 col-md-8 col-lg-8 col-xl-9 fw-bold ">Endereço</div>

                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center justify-content-center ">
                                                                
                                                                <i class="fa-solid fa-pencil mb-3 mt-3"></i>

                                                            </div>

                                                            <div class = "col-12 col-md-9 col-lg-8 col-xl-7" > 

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >Nome Sobrenome, 5554996508956 </span>


                                                                </div>

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >N. 286</span>


                                                                </div>

                                                                <div class="row">

                                                                    <span class="mt-1 mb-1">Rua Marechal Floriano, Centro, Brasil, 95048589</span>

                                                                </div>

                                                            </div>

                                                        </div>


                                                        <!-- Pedido 2 -->

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-8 col-lg-8 col-xl-9 fw-bold">Formas de Pagamento</div>

                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center justify-content-start">

                                                                <div class="form-check">

                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">

                                                                    <label class="form-check-label" for="flexRadioDefault1">

                                                                        Cartão

                                                                    </label>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center justify-content-start">

                                                                <div class="form-check">

                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">

                                                                    <label class="form-check-label" for="flexRadioDefault1">

                                                                        Boleto

                                                                    </label>

                                                                </div>

                                                            </div>

                                                                <div class = "col-12 col-md-5 col-lg-6 col-xl-7 d-flex align-items-center " > 

                                                                    <div class="row ">

                                                                        <span class="mt-12 mb-1" >
                                                                            
                                                                            CPF: 03589632512

                                                                        </span>
                                                                    </div>

                                                                </div>

                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center" >

                                                                <div class="form-check">

                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">

                                                                    <label class="form-check-label" for="flexRadioDefault1">

                                                                       Parcelado

                                                                    </label>

                                                                </div>

                                                            </div> 

                                                            <div class = "col-12 col-md-9 col-lg-8 col-xl-6 align-items-center " > 

                                                                <div class="row ">

                                                                    <span class="mt-12 mb-1" >

                                                                        <select class="form-select" name = "forma_pgto" title = "Forma de Pagamento" >

                                                                           
                                                                            <option value = "forma_pgto2" selected='true'>R$ 380,60 x 2</option>
                                                                            <option value = "forma_pgto3">R$ 253,73 x 3</option>
                                                                            <option value = "forma_pgto4">R$ 190,30 x 4</option>
                                                                            <option value = "forma_pgto5">R$ 152,24 x 5</option>
                                                                            <option value = "forma_pgto6">R$ 126,86 x 6</option>

                                                                        </select>

                                                                    </span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-10 col-lg-8 col-xl-9 fw-bold">CARTÃO / PARCELAMENTO</div>

                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center justify-content-start ">

                                                                <div class="form-check">

                                                                    Dados:

                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-md-5 col-lg-4 col-xl-3 d-flex align-items-center " > 

                                                                <div class="row ">

                                                                    <span class="mt-12 mb-1" >
                                                                        
                                                                        N°5489757143306417

                                                                    </span>
                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-md-4 col-lg-4 col-xl-3  align-items-center" > 

                                                                <div class="row ">

                                                                    <span class="mt-12 mb-1" >
                                                                        
                                                                        <input type="number" name = "cd_seguranca" placeholder="Cod Segurança"
                                                                            class="form-control" title = "Código de Segurança" maxlength = "3"
                                                                            required 
                                                                        >

                                                                    </span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-3 col-lg-2 col-xl-2 d-flex align-items-center" >

                                                                Validade

                                                            </div> 

                                                            <div class = "col-12 col-md-5 col-lg-4 col-xl-3 align-items-center " > 

                                                                <div class="row ">

                                                                    <span class="mt-12 mb-1" >

                                                                        <select class="form-select" name = "mes" title = "Mês" >

                                                                            <option selected='true' value = "janeiro">Janeiro (01)</option>
                                                                            <option value = "fevereiro">Fevereiro (02)</option>
                                                                            <option value = "marco">Março (03)</option>
                                                                            <option value = "janeiro">Abril (04)</option>
                                                                            <option value = "maio">Maio (05)</option>
                                                                            <option value = "junho">Junho (06)</option>
                                                                            <option value = "julho">Julho (07)</option>
                                                                            <option value = "agosto">Agosto (08)</option>
                                                                            <option value = "setembro">Setembro (09)</option>
                                                                            <option value = "outubro">Outubro (10)</option>
                                                                            <option value = "novembro">Novembro (11)</option>
                                                                            <option value = "dezembro">Dezembro (12)</option>

                                                                        </select>

                                                                    </span>
                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-md-4 col-lg-4 col-xl-3 align-items-center " > 

                                                                <div class="row ">

                                                                    <span class="mt-12 mb-1" >

                                                                        <select class="form-select" name = "ano" title = "Ano" >

                                                                            <option value = "vintedois">2022</option>
                                                                            <option value = "vintetres">2023</option>
                                                                            <option value = "vintequatro">2024</option>
                                                                            <option value = "vintecinco">2025</option>
                                                                            <option value = "vinteseis">2026</option>
                                                                            <option value = "vintesete">2027</option>
                                                                            <option value = "vinteoito">2028</option>
                                                                            <option value = "vintenove">2029</option>
                                                                            <option value = "trinta">2030</option>

                                                                        </select>

                                                                    </span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <!-- Pedido 3 -->

                                                        <div class = "row border border-dark ">

                                                            <div class = "col-12 col-md-8 col-lg-8 col-xl-9 fw-bold">Revisão do pedido</div>

                                                        </div>
						
							<div class = "row h-100">

                                                            <div class = "col-12 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center justify-content-center ">

                                                                <img src="imagens/placa.jpg" class="mb-3 mt-3"  >

                                                            </div>

                                                            <div class = "col-12 col-md-10 col-lg-10 col-xl-10 " > 

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >Placa de Vídeo NVIDIA GTX 1050 GEFORCE</span>


                                                                </div>

                                                                <div class="row">

                                                                    <span class="mt-1 mb-1"></span>

                                                                </div>

                                                            </div>

                                                        </div>
						
							<div class = "row h-100">

                                                            <div class = "col-12 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center justify-content-center ">

                                                            </div>

                                                            <div class = "col-12 col-md-4 col-lg-4 col-xl-4 " > 

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >RS 761,20</span>


                                                                </div>

                                                                <div class="row">

                                                                    <span class="mt-1 mb-1">Envio: R$: 10,00</span>

                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 mt-1 mb-1 d-flex justify-content-center" > 

                                                                <a ref='#' 
                                                                    class='btn btn-compra justify-content-center d-flex align-items-center fw-bold h-75 mt-1' 
                                                                    title="Visualizar"
                                                                >

                                                                    -

                                                                </a>

                                                                <div class='justify-content-center d-flex align-items-center fw-bold h-75 mt-1 ms-2'>

                                                                    1

                                                                </div>

                                                                <a href='#' 
                                                                    class='btn btn-compra justify-content-center d-flex align-items-center fw-bold h-75  mt-1 ms-2' 
                                                                    title="Visualizar"
                                                                >

                                                                    +

                                                                </a>
                                                            
                                                            </div>

                                                        </div>

                                                        <div class = "row border border-dark h-100">

                                                            <div class = "col-12 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center justify-content-center ">
                                                                
                                                                

                                                            </div>

                                                            <div class = "col-12 col-md-4 col-lg-4 col-xl-3" > 

                                                                <div class="row ">

                                                                    <span class="mt-1 mb-1" >Total: RS 771,20<</span>


                                                                </div>

                                                                <div class="row">

                                                                    <span class="mt-1 mb-1"></span>

                                                                </div>

                                                            </div>

                                                            <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-1 mb-1 d-flex justify-content-center" > 

                                                                <a href='#' 
                                                                    class='btn btn-compra justify-content-center d-flex align-items-center fw-bold h-75 mt-1' 
                                                                    title="Fazer Pedido"
                                                                >

                                                                    Fazer Pedido

                                                                </a>
                                                            
                                                            </div>

                                                        </div>


                                                     <?php

                                                    $count++;

                                                /* } */ ?>
                                                
                                                <?php
                                            } 

                                            ?>

                                            <a href='pedidos.php' class='btn btn btn-success left-margin mt-3'> Voltar </a>
                                    
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
