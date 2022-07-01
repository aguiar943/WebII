<?php ob_start(); ?>
<!DOCTYPE HTML>

<html lang=pt-br>

    <head>

        <meta charset="UTF-8">

        <title>Compre Ai</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link rel="icon" href="imagens/simbolo.png" />
        <title>Compre Aí</title>
		
        <link href="css/custom.css" rel="stylesheet" >     
        <link href="css/form-validation.css" rel="stylesheet" >

        <link href="https://getbootstrap.com/docs/5.1/examples/checkout/" rel="canonical">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

        <script src="js/bootstrap.min.js"></script>
		
        <link href="css/bootstrap.min.css" rel="stylesheet" >

    </head>

<body class="bg-light" >
    <header>    
        <div class="row text-center area-top">
            <div class="row mt-1 d-flex justify-content-center">
                <div class="col-xl-8 d-flex justify-content-center banner-h">
                    <div class = "col-xl-2  d-flex justify-content-center mt-1 mb-1">
                        <div class = "col-xl-12" > 
							<a href="index.php" class="d-flex align-items-center text-dark text-decoration-none"> 
								<img src = "imagens/logo.png" class = " w-100 h-100 mb-4 rounded" ></a>
                        </div>
                    </div>
                        <div class = "col-xl-7 mt-1 mb-1"> <!-- border border-dark -->
							<div class = "d-flex justify-content-start h-100 search-mg " >
								<input type="text" class="w-100 ms-1 search-mg border border-danger" placeholder = "Buscar" />
								<button type="button" class="btn btn-danger lupa-mg">
									<img src="imagens/lupa.png" class="h-50 align-top mt-1" >
								</button>
							</div>
                        </div>
                        <div class = "col-xl-1 d-flex justify-content-center mt-1 mb-1"> <!-- border border-dark -->
							<div class = "d-flex justify-content-start h-100 search-mg" >
								<a href="#" class="d-flex align-items-center conta mt-2 ">
									<img src="imagens/carrinho.png" class="align-middle  h-100 mb-3 mt-2" >      
								</a>
							</div>
                        </div>
                        <div class = "col-xl-2 mt-1 mb-1"> <!-- border border-dark -->
							<div class = "d-flex justify-content-start h-50 search-mg" >
								<img src="imagens/user.png" class="align-middle ms-2 mb-2 mt-1" >
                                <div class="pull-right" id="login_info">
                                    <?php	
                                        include_once "comum.php";
                                        
                                        if ( is_session_started() === FALSE ) {
                                            session_start();
                                        }	
                                        
                                        if(isset($_SESSION["nome_usuario"])) {
                                            // Informações de login
                                            echo $_SESSION["nome_usuario"] .		
                                            "<a href='executa_logout.php'> Logout </a></span>";
                                        } else {
                                            echo "<span><a href='login.php'> Efetuar Login </a></span>";
                                        }
                                    ?>	
                                    </div>
							</div>
                        </div>
                </div>
			</div>
		</div>

		<div class="row text-center" >
			<div class="row d-flex justify-content-center mt-1 area-menu">
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
											  <?php
										if(isset($_SESSION["nome_usuario"])) {											
											echo'<li class = "w-25 rounded" >';
											echo'<div class = "mt-1" > <a href="cadastro_produtos.php?=1">Produtos </a> </div>';
											echo '</li>';
											echo'<li class = "w-25 rounded" >';
											echo'<div class = "mt-1" > <a href="cadastro_fornecedores.php?=1">Fornecedores </a> </div>';
											echo '</li>';
											echo'<li class = "w-25 rounded" >';
											echo'<div class = "mt-1" > <a href="cadastro_usuarios.php">Usuarios </a> </div>';
											echo '</li>';							
											
										} else{
											echo'<li class = "w-25 rounded" >';
											echo'<div class = "mt-1" >Produtos</div>';
											echo '</li>';
											echo'<li class = "w-25 rounded" >';
											echo'<div class = "mt-1" >Fornecedor</div>';
											echo '</li>';
											echo'<li class = "w-25 rounded" >';
											echo'<div class = "mt-1" >Usuarios</div>';
											echo '</li>';						
										}	
										
										?>
										
										</li>
										<li class = "w-25 rounded" >

											<div class = "mt-1" > Sobre </div>

										</li>
							</ul>	

						</div>

                    </div>

                </div>

            </div>

        </div>
    </header>                            
