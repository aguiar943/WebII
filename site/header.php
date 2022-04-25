<!DOCTYPE HTML>

    <html lang=pt-br>

    <head>

	    <meta charset="UTF-8">

	    <title>Lista de veículos</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <link rel="icon" href="imagens/simbolo.png" />
        <title>Checkout example · Bootstrap v5.1</title>

        <link href="css/custom.css" rel="stylesheet" >     
        <link href="css/form-validation.css" rel="stylesheet" >

        <link href="https://getbootstrap.com/docs/5.1/examples/checkout/" rel="canonical">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        
    </head>

    <body class="bg-light" >

        <?php
            /*	
            $dao = $factory->getVeiculoDao();
            $veiculos = $dao->buscaTodos();
			
			
			
            */
        ?>

        <div class="row text-center area-top">

            <!-- linha da barra superior fica com a coluna principal centralizada -->
            
            <div class="row mt-1 d-flex justify-content-center">

                <!--coluna da linha fica com itens centralizados -->

                <div class="col-xl-8 d-flex justify-content-center banner-h">

                    <div class = "col-xl-2  d-flex justify-content-center mt-1 mb-1"> <!-- border border-dark -->

                        <div class = "col-xl-12" > 
				
				<!--
					::: Comentário e Observação feita pelo Maurício :::

					Esté é o Icone na versão antiga. O máximo de W ( largura do bootstrap é W-100% )
					W-200 ou 200% de largura só é possível alcançar por meio do arquivo CSS através
					do uso de classes ou IDs de HTML

					<img src="imagens/logosemfundo.png" class = "img-thumbnail w-200 h-100" ></img>

				-->

				<!-- 
					Abaixo é o icone atualizado para W-100% que é o tamanho máximo no Bootstrap sem ser por CSS.
					O Icone abaixo possui uma resolução menor, pois o logo sem fundo de antes não ficava responsivo
					quando o zoom da página era aumentado ou diminuido, então ele foi diminuido para se ajustar
					com a responsividade.

				-->    
				
				<img src = "imagens/logo.png" class = " w-100 h-100 mb-4 rounded" >
                            
                        </div>

                    </div>

                    <div class = "col-xl-7 mt-1 mb-1"> <!-- border border-dark -->

                        <div class = "d-flex justify-content-start h-100 search-mg " >

                            <input type="text" class="w-100 ms-1 search-mg border border-danger" placeholder = "Buscar" />
                            

                            <button type="button" class="btn btn-danger lupa-mg">
							
				    <!-- 

					A lupa do menu de busca estava como icone mas não estava responsiva

					<i class="fa-solid fa-magnifying-glass h-50 align-top mt-1"></i> 

				    -- >

				    <!-- 

					 O icone foi mudado para imagem para que possa ficar responsivo quando o usuário aumentar ou diminuir o zoom

 				    -->
				    
				    <img src="imagens/lupa.png" class="h-50 align-top mt-1" >

                            </button>
                                
                        </div>

                    </div>

                    <div class = "col-xl-1 d-flex justify-content-center mt-1 mb-1"> <!-- border border-dark -->

                        <div class = "d-flex justify-content-start h-100 search-mg" >

                            <a href="#" class="d-flex align-items-center conta mt-2 ">
						
				    <!-- 

					Icone de carrinho alterado para imagem para garantir a responsividade
					quando for adicionado zoom ou reduzido o zoom na página

					<i class="fa-solid fa-cart-shopping align-middle  h-100 mb-3 mt-2"></i>

				    -->
				    
				    <img src="imagens/carrinho.png" class="align-middle  h-100 mb-3 mt-2" >
								                        
                            </a>
                            
                        </div>

                    </div>

                    <div class = "col-xl-2 mt-1 mb-1"> <!-- border border-dark -->

                        <div class = "d-flex justify-content-start h-100 search-mg" >
				
				<!-- 

					Icone do usuário alterado para imagem para garantir a responsividade
					quando for adicionado zoom ou reduzido o zoom na página

					<i class="fa-solid fa-user align-middle ms-2 mb-2 mt-1"></i>

			    	-->
				
				<img src="imagens/user.png" class="align-middle ms-2 mb-2 mt-1" >
							
							

                            <a href="#" class="d-flex align-items-center conta">

                                <span class="d-flex align-items-center ms-2 mt-1 mb-2 text-dark" style="font-size:1.4vh;"><a href="model/login.php">Minha Conta</a></span>

                            </a>

                        </div>
			    
			<div class = "col-xl-3 mt-1 mb-1 d-flex"> <!-- border border-dark -->

                        	<div class = "d-flex me-5 h-100 w-100 search-mg menu mt-1  " > <!-- ... -->
                         
				    <ul class="d-flex w-100 h-75 me-5" >

						<li class = "w-100 rounded d-flex " >

						    <div class = "d-flex justify-content-start" >

							<!-- 

								Icone do usuário alterado para imagem para garantir a responsividade
								quando for adicionado zoom ou reduzido o zoom na página

								<i class="fa-solid fa-user align-middle ms-2 mb-2 mt-1"></i>

							-->

							<a href="#" class="d-flex conta me-5">

							    <div class="d-flex  mb-3 ms-3 text-dark h-50 w-100 justify-content-start" style="font-size:1.4vh; z-index: 2 ;">Minha Conta</div>

							    <ul class = "mt-5 me-1 products-list " > 

								<li class = "submenu-conta w-100  d-flex align-items-center rounded mt-5" > <!-- border border-dark -->

								    <div class = "w-75 mt-2 mb-2 ms-3 text-dark d-flex align-items-start" > Bem vindo </div>

								</li>

								<li class = "submenu-conta w-100 d-flex align-items-center justify-content-center rounded " > <!-- border border-dark -->

								    <div class = "mb-2 ms-1 me-1" > 

									<button type="button" class="btn btn-sm btn-danger lupa-mg h-50 w-100">

									    <div class="h-50 align-top mt-1 " > Cadastro </div>

									</button>

								    </div>

								    <div class = "mb-2 me-1 me-1" >

									<button type="button" class="btn btn-sm btn-danger lupa-mg h-50 w-100">

									    <div class="h-50 align-top mt-1" > Login </div>

									</button>

								    </div>

								</li>

								<li class = "submenu-conta w-100  d-flex align-items-center  rounded" > <!-- border border-dark -->

								    <div class = "w-75 mt-2 mb-2 text-dark" > Meus Pedidos </div>

								</li>

							    </ul>

							</a>

							<!-- <i class="fa-solid fa-angle-down"></i> -->

						    </div>                                   

						</li>

                            		</ul>

				</div>

                    	</div>

                    </div>

                </div>
                
            </div>

        </div>

        <div class="row text-center" >

            <!-- linha da barra superior fica com a coluna principal centralizada -->

            <div class="row d-flex justify-content-center mt-1 area-menu">

                <!--coluna da linha fica com itens centralizados -->

                <div class="col-xl-8 d-flex justify-content-center w-75 ">

                    <div class = "col-xl-6 d-flex justify-content-center mt-1 mb-1 h-75 w-50 ">

                        <div class = "menu w-100 " >

                            <ul class="d-flex w-100 h-75 " >

                                <li class = " w-25 rounded" > <!-- border border-dark -->
                                    
                                    <div class = "mt-1" > Início </div>
                            
                                </li>

                                <li class = "w-25 rounded" >

                                    <div class = "mt-1" >  
                                        
                                        Produtos 

                                        <i class="fa-solid fa-angle-down"></i>

                                    </div>

                                    <ul class = "mt-2 me-1 w-100 products-list" > 

                                        <li class = "submenu w-100  d-flex align-items-center  rounded" > <!-- border border-dark -->
                                            
                                            <div class = "w-75" >Informática</div> <!-- level 2 -->
                                            
                                            <i class="fa-solid fa-angle-right ms-2"></i>
                                                
                                            <ul class = "w-100 mt-5 " > <!-- level 3 -->
											
						<li class = "w-100 rounded" > Adicionar Novo </li> <!-- border border-dark -->

                                                <li class = "w-100 rounded" > Monitor </li> <!-- border border-dark -->

                                                <li class = "w-100 rounded" > Placa de Vídeo </li>

                                                <li class = "w-100 rounded" > Teclados </li>
                                            
                                            </ul>  

                                        </li>

                                        <li class = "submenu w-100 h-25 d-flex align-items-center text-center rounded " > 
                                            
                                            <div class = "w-75" >Eletro</div> <!-- level 2 -->
                                            
                                            <i class="fa-solid fa-angle-right ms-2"></i>
                                            
                                            <ul class = "w-100 mt-5 " > <!-- level 3 -->
											
						<li class = "w-100 rounded" > Adicionar Novo </li> <!-- border border-dark -->

                                                <li class = "me-1 w-100 rounded" > Geladeiras </li> <!-- border border-dark  -->

                                                <li class = "w-100 rounded" > Máquina de Lavar </li>

                                                <li class = "w-100 rounded" > Micro-Ondas </li>

                                                <li class = "w-100 rounded" > Fogões </li>
                                            
                                            </ul>  

                                        </li>

                                        <li class = "submenu w-100 ms-3h-25 d-flex align-items-center text-center rounded" > 
                                            
                                            <div class = "w-75" > Vestuário </div> <!-- level 2 -->
                                            
                                            <i class="fa-solid fa-angle-right ms-2"></i>
                                            
                                            <ul class = "w-100 mt-5  " > <!-- level 3 -->
											
						<li class = "w-100 rounded" > Adicionar novo </li>

                                                <li class = "me-1 w-100 rounded" > Camisetas </li> <!-- border border-dark  -->

                                                <li class = "w-100 rounded" > Camisas </li>

                                                <li class = "w-100 rounded" > Calças </li>

                                                <li class = "w-100 rounded" > Sapatos </li>

                                                <li class = "w-100 rounded" > Tênis </li>

                                                <li class = "w-100 rounded" > Sapatênis </li>

                                                <li class = "w-100 rounded" > Meias </li>
                                            
                                            </ul>  

                                        </li>

                                    </ul>

                                </li>
								
				<li class = "w-25 rounded" >

                                    <div class = "mt-1" > Cadastro </div>

                                </li
				<li class = "w-25 rounded" >

                                    <div class = "mt-1" > Sobre </div>

                                </li>
								
				<!--

                                <li class = "w-25 rounded" >

                                    <div class = "mt-1" >  
                                        
                                        Produtos

                                        <i class="fa-solid fa-angle-down"></i>

                                    </div>

                                    <ul class = "mt-2 me-1 w-100 products-list" > 

                                        <li class = "submenu w-100  d-flex align-items-center  rounded" > !-- border border-dark --
                                            
                                            <div class = "w-75" ><a href="model/cadastro_produtos.php"> Cadastro </a> </div> !-- level 2 --
                                            
                                    
                                        </li>

                                        <li class = "submenu w-100 h-25 d-flex align-items-center text-center rounded " > 
                                            
                                            <div class = "w-75" ><a href="model/novo_produto.php">Inclusão</a></div> !-- level 2 --
                                            
                                        </li>
                                </li>

                                <li class = "w-25 rounded" >

                                    <div class = "mt-1" >  
                                        
                                        Fornecedores

                                        <i class="fa-solid fa-angle-down"></i>

                                    </div>

                                    <ul class = "mt-2 me-1 w-100 products-list" > 

                                        <li class = "submenu w-100  d-flex align-items-center  rounded" > !-- border border-dark --
                                            
                                            <div class = "w-75" ><a href="model/cadastro_fornecedores.php"> Cadastro </a> </div> !-- level 2 --
                                            
                                    
                                        </li>

                                        <li class = "submenu w-100 h-25 d-flex align-items-center text-center rounded " > 
                                            
                                            <div class = "w-75" ><a href="model/novo_fornecedor.php">Inclusão</a></div> !-- level 2 --
                                            
                                        </li>

                                </li> 

				-->   

                            </ul>	

                        </div>

                    </div>

                </div>
                
            </div>

        </div>

        <!--

    </body>

</html>

    -->
