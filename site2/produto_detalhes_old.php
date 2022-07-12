<?php

include_once "fachada.php";

?>

<div id = "detalhes_produto_info" class = "row d-flex justify-content-center border border-dark " >


    <div id = "foto_main_info" class = "col-xl-3 border border-dark h-100 ms-5" >

        sdfdsf

    </div>

    <div id = "detalhes" class = "col-xl-5 w-50" >

        <div id = "titulo" class = "row" >

            <div id = "produto-info-h" class = "col-xl-5 mt-2 ms-2 w-50" >

                Placa de Vídeo NVIDIA GeForce GTX 1050VV

            </div>

        </div>

        <div id = "preco" class = "row mt-1" >

            <div id = "produto-info-h" class = "col-xl-5 ms-2 w-50" >

                <b> R$ 900,00 </b>

            </div>

        </div>

        <div id = "parcelamento" class = "row mt-1" >

            <div id = "produto-info-h" class = "col-xl-5 ms-2 w-50" >
                
                R$ 6 x R$ 150 sem juros

            </div>

        </div>

        <div id = "lb_cores" class = "row" >

            <div id = "produto-info-h" class = "col-xl-5 ms-2 w-50" >

                Cores: XFX-RX580-8G-2304SP

            </div>

        </div>

        <div id = "detalhes_produto" class = "row  mini-fotos-area d-flex align-items-center" >

            <div id = "cor_1" class = "col-xl-1 border produto-info-h ms-2 h-75 w-25 d-flex justify-content-center" >

                Cor1

            </div>

            <div id = "cor_2" class = "col-xl-1 border produto-info-h ms-2 h-75 w-25 d-flex justify-content-center" >

                Cor2

            </div>

            <div id = "cor_3" class = "col-xl-1 border produto-info-h ms-2 h-75 w-25 d-flex justify-content-center" >
            
                Cor3

            </div>

        </div>

        <div id = "lb_qtd" class = "row " >

            <div id = "produto-info-h" class = "col-xl-5 ms-2 w-50" >

                Quantidade:

            </div>

        </div>

        <div id = "btns_qtd" class = "row mini-fotos-area d-flex align-items-center" >

            <button 
                id = "diminuir" 
                class = "col-xl-1 border produto-info-h ms-2 h-75 w-25 d-flex align-items-center justify-content-center" 
            >

                <i class="fa-solid fa-2x fa-minus"></i>

            </button>

            <input 
                id = "qtd" 
                class = "col-xl-1 border produto-info-h ms-2 h-75 w-25 d-flex align-items-center justify-content-center" style = "background-color:white;" 
            />
               
            <button 
                id = "aumentar" 
                class = "col-xl-1 border produto-info-h ms-2 h-75 w-25 d-flex align-items-center justify-content-center" 
            >

                <i class="fa-solid fa-2x fa-plus"></i>
                
            </button>

        </div>

        <div id = "frete" class = "row" >

            <div id = "produto-info-h" class = "col-xl-5 ms-2 w-50" >

                Envio: R$ 50,00

            </div>

        </div>

        <div id = "metodo_envio" class = "row" >

            <div id = "produto-info-h" class = "col-xl-5 ms-2 w-50" >

                Para Brasil via DHL

            </div>

        </div>

        <div id = "prazo_entrega" class = "row" >

            <div id = "produto-info-h" class = "col-xl-5 ms-2" >

                Estimativa de entrega: 06 Mai

            </div>
           
        </div>

        <div id = "" class = "row mt-1 d-flex align-items-center" >

            <div id = "foto_main" class = "col-xl-3 ms-2 d-flex justify-content-center " >

                <button id = "btn-compra" class = "d-flex justify-content-center align-items-center w-100 btn-sz" >

                    Comprar agora

                </button>

            </div>

            <div id = "foto_main" class = "col-xl-3 ms-2 d-flex justify-content-center " >

                <button id="btn-add" class = "d-flex justify-content-center align-items-center w-100 btn-sz" >

                    Adicione ao carrinho
                    
                </button>

            </div>

        </div>

    </div> 

    <div id = "" class = "row mt-1 d-flex d-flex justify-content-start" >

        <div id = "fotos-rodape" class = "col-xl-2 d-flex justify-content-center " >

            <div id = "img1" class = "d-flex justify-content-center align-items-center w-25  btn-sz border border-dark text-dark" >

                Img 1

            </div>

            <div id="img2" class = "d-flex justify-content-center align-items-center w-25 btn-sz border border-dark ms-1 text-dark" >

                Img 2
                
            </div>

            <div id="img3" class = "d-flex justify-content-center align-items-center w-25 btn-sz border border-dark ms-1 text-dark" >

                Img 3
                
            </div>

            <div id = "img4" class = "d-flex justify-content-center align-items-center w-25 btn-sz border border-dark ms-1 text-dark" >

                Img 4

            </div>

            <div id="img5" class = "d-flex justify-content-center align-items-center w-25 btn-sz border border-dark ms-1 text-dark" >

                Img 5
                
            </div>

            <div id="img6" class = "d-flex justify-content-center align-items-center w-25 btn-sz border border-dark ms-1 text-dark" >

                Img 6
                
            </div>

        </div>             

    </div>

    <div id = "fotos-categorias" class = "row mt-2 w-75 me-5 ms-3" >

        <div id = "geral-categorias" class = "col-xl-8 ms-4 h-100 border border-dark " > <!-- bg-primary -->

            <div id = "geral-bot" class = "row h-100 border border-dark d-flex justify-content-center "> <!-- bg-danger -->

                <div id = "categoria-detalhe" class = "col-xl-1 mb-2 mt-3 ms-2"> <!-- bg-warning -->

                    <div class="w-100 me-5 border border-dark rounded p-1 bg-cat" > <!-- bg-sucess -->

                        <div class = "center-flx border border-dark justify-content-start " > 

                            <b class = "ms-3" > INFORMÁTICA </b> 

                        </div>

                        <div class = "center-flx border border-dark" >

                            Placas de Vídeo

                        </div>

                        <div class = "center-flx border border-dark">

                            Monitores

                        </div>

                        <div class = "center-flx border border-dark " >

                            Teclados

                        </div>

                        <div class = "center-flx border border-dark justify-content-start" >

                            <b class = "ms-3" > VESTUÁRIO </b> 

                        </div>

                        <div class = "center-flx border border-dark">

                            Camisetas

                        </div>

                        <div class = "center-flx border border-dark" >

                            Camisas

                        </div>

                        <div class = "center-flx border border-dark" >

                            Calças

                        </div>

                        <div class = "center-flx border border-dark">

                            Bermudas

                        </div>

                        <div class = "center-flx border border-dark" >

                            Sapatos

                        </div>

                        <div class = "center-flx border border-dark" >

                            Sapatênis

                        </div>

                        <div class = "center-flx border border-dark">

                            Meias

                        </div>                        

                    </div>

                </div>
    
                <div id = "menu-fotos" class = "col-xl-10 border border-dark mt-3 " ><!-- bg-secondary -->
            
                    <div id = "foto" class = "row ms-1 me-1 h-100 mt-3">

                        <div id = "" class = "col-xl-12 mb-2 border border-dark center-flx foto-h" >

                            Foto 1

                        </div>

                        <div id = "" class = "col-xl-12 mb-2 border border-dark center-flx foto-h" >

                            Foto 1

                        </div>

                        <div id = "" class = "col-xl-12 mb-2 border border-dark center-flx foto-h" >

                            Foto 1

                        </div>

                        <div id = "" class = "col-xl-12 mb-4 border border-dark center-flx foto-h" >

                            Foto 1

                        </div>

                    </div>

                </div>

            </div>
        
        </div>

    </div>

    <?php include 'footer.php'; ?>

</div>




