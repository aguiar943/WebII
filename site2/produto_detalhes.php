<?php

    include_once "fachada.php";

    $id_produto = explode("=", $_SERVER['REQUEST_URI'])[1];

    $dao = $factory->getSubCategoriaDao();
    $subcategorias = $dao->buscaTodos();

    $dao = $factory->getMarcaDao();
    $marcas = $dao->buscaTodos();

    $dao = $factory->getCorDao();
    $cores = $dao->buscaTodos();

    $dao = $factory->getProdutoDao();
    $produto = $dao->buscaPorId($id_produto);

    $valor_parcelado = ($produto->getPrecoVenda() / 6);
    $valor_parcelado = number_format((float)$valor_parcelado, 2, ',', '');



?>

<form method="post" action="compra.php">

    <div class=" w-100 d-flex justify-content-center geral_produtos" >

        <div id = "linha_foto" class="row linha_foto me-1 w-75 photo">
            
            <div class=" col-12 col-md-6 col-lg-6 col-xl-4 photo " >

                <img src="imagens/placa.jpg"  >

            </div>

            <div class=" col-12 col-md-6 col-lg-5 col-xl-4 photo " >           

                <div class="row row_border">

                    <div class=" col-12 col-md-12 col-xl-12" >

                        <div class="mt-1 mb-1" ><?= $produto->getSubcategoria() . " " . $produto->getMarca() . " " . $produto->getModelo(); ?></div>

                    </div>

                </div>

                <div class="row row_border">

                    <div class=" col-12 col-md-12 col-xl-12" >
                        
                        <div class="mt-1 mb-1" >
                            
                            R$ <?= $produto->getPrecoVenda(); ?> - R$ 6 x R$ <?= $valor_parcelado; ?>

                        </div>

                    </div>
                    
                </div>

                <div class="row row_border">

                    <div class=" col-12 col-md-10 col-lg-8 col-xl-11 " >

                        <div class="row row_border">

                            <div class="col-3 col-md-3 col-lg-3 col-xl-2 row_border_all m-1 " 
                                style="background-color: <?= $dao->checkQtdCores(0, $produto) ; ?>;"
                                title="Cor 1"
                            >

                                <div class="mt-3 mb-3">

                                &nbsp&nbsp

                                </div>

                            </div>

                            <div class="col-3 col-md-3 col-lg-3 col-xl-2 row_border_all m-1 " 
                                style="background-color: <?= $dao->checkQtdCores(1, $produto) ; ?>;"
                                title="Cor 2"
                            >

                                <div class="mt-3 mb-3">

                                &nbsp&nbsp

                                </div>

                            </div>

                            <div class="col-3 col-md-3 col-lg-3 col-xl-2 row_border_all m-1 " 
                                style="background-color: <?= $dao->checkQtdCores(2, $produto) ; ?>;"
                                title="Cor 3"
                            >

                                <div class="mt-3 mb-3">

                                &nbsp&nbsp

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row border row_border">

                    <div class=" col-12 col-md-12 col-xl-12 " >
                        
                        <div class="mt-1 mb-1" >Quantidade:</div>

                    </div>

                </div>

                <div class="row border ">

                    <div class=" col-10 col-md-8 col-lg-7 col-xl-6 d-flex m-1 p-0" >

                        <button type="button" id = "diminuir" name="" class = "justify-content-center align-items-center w-100" 
                            onclick="adicionar('diminuir')" 
                        >

                            <i class="fa-solid fa-2x fa-minus"></i>

                        </button>

                        <input type="text" id="qtd_produtos" name = "qtd" value="1" class = "justify-content-center align-items-center w-100" >

                        <button type="button" id = "aumentar" name="" class = "justify-content-center align-items-center ms-1 w-100" 
                            onclick="adicionar('aumentar')" 
                        >
                            
                            <i class="fa-solid fa-2x fa-plus"></i>

                        </button>

                    </div>

                </div>

                <div class="row row_border">

                    <div class=" col-12 col-md-12 col-xl-12" >
                        
                        <div class="mt-1 mb-1" >Envio: R$ 50,00</div>

                    </div>

                </div>

                <div class="row row_border">

                    <div class=" col-12 col-md-12 col-xl-12" >
                        
                        <div class="mt-1 mb-1" >Para Brasil via DHL</div>

                    </div>

                </div>

                <div class="row row_border">

                    <div class=" col-12 col-md-12 col-xl-12" >
                        
                        <div class="mt-1 mb-1" >Entrega: 06 Mai</div>

                    </div>

                </div>

                <div class="row row_border">

                    <div class=" col-12 col-md-10 col-lg-12 col-xl-12" >
  
                        <div class="row row_border">
                            
                            <div class="col-5 col-md-5 col-lg-5 col-xl-5 row_border_all m-1 p-0 d-flex">   

                                <button type="submit" name = "btn_compra" class = "d-flex justify-content-center align-items-center w-100 btn-sz" >

                                    Comprar

                                    <?php 

                                        $_SESSION['produto'] = serialize($produto);
                                        
                                                               
                                        
                                    ?>

                                </button>
                                
                            </div>

                            <div class="col-5 col-md-5 col-lg-5 col-xl-5 row_border_all m-1 p-0 d-flex">

                                <button type="submit" class = "d-flex justify-content-center align-items-center w-100 btn-sz" >

                                    Carrinho

                                </button>

                            </div>

                        </div>

                    </div>

                </div>
            
            </div>

            <div class=" col-12 col-md-12 col-lg-11 col-xl-8 justify-content-center galeria align-items-center" >

                <div class="row d-flex align-items-center">

                    <div class="col-8 col-md-4 col-lg-5 col-xl-5 align-items-center border-dark border ms-5 bg-primary mt-2 mb-5" >

                        <div id="area_cards" class="row d-flex align-items-center justify-content-center">

                            <div class="col-2 col-md-2 col-lg-2 col-xl-2 border border-dark card_galeria align-items-center mb-1 mt-1" >                   

                                <img src="imagens/placa.jpg"  >
                                
                            </div>

                            <div class="col-2 col-md-2 col-lg-2 col-xl-2 border border-dark card_galeria align-items-center ms-1 mb-1 mt-1" >                   

                                <img src="imagens/placa.jpg"  >
                                
                            </div>

                            <div class="col-2 col-md-2 col-lg-2 col-xl-2 border border-dark card_galeria align-items-center ms-1 mb-1 mt-1" >                   

                                <img src="imagens/placa.jpg"  >
                                
                            </div>

                            <div class="col-2 col-md-2 col-lg-2 col-xl-2 border border-dark card_galeria align-items-center ms-1 mb-1 mt-1" >                   

                                <img src="imagens/placa.jpg"  >
                                
                            </div>

                            <div class="col-2 col-md-2 col-lg-2 col-xl-2 border border-dark card_galeria align-items-center ms-1 mb-1 mt-1" >                   

                                <img src="imagens/placa.jpg"  >
                                
                            </div>

                        </div>

                    </div>

                </div>
                    
            </div>

        </div>
    
    </div>

 </form>

<?php

    include_once "footer.php";


?>
