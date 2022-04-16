<?php

include_once "fachada.php";

?>

<!-- 

<body>

-->

	<?php
		/*	
		$dao = $factory->getVeiculoDao();
		$veiculos = $dao->buscaTodos();
		*/
	?>

	<div class=" text-center row " style="background-color: #d8d8d8;">

		<!-- linha da barra superior fica com a coluna principal centralizada -->
		
		<div class="row mt-1 d-flex justify-content-center">

			<!--coluna da linha fica com itens centralizados -->

			<div class="col-xl-8 d-flex justify-content-center banner-h">

				<div class = "col-xl-2 border border-dark d-flex justify-content-center mt-1 mb-1">

					<div class = "col-xl-12" > 

						<img src = "../imagens/logo.png" class = " w-100 h-100 mb-4" >
						
					</div>

				</div>

				<div class = "col-xl-7 border border-dark mt-1 mb-1">

					<div class = "d-flex justify-content-start h-100 search-mg " >

						<input type="text" class="w-100 ms-1 search-mg border border-danger" placeholder = "Buscar" />
						

						<button type="button" class="btn btn-danger lupa-mg">

							<img src="../imagens/lupa.png" class="h-50 align-top mt-1" > <!-- search align-top -->

						</button>
							
					</div>

				</div>

				<div class = "col-xl-1 border border-dark d-flex justify-content-center mt-1 mb-1">

					<div class = "d-flex justify-content-start h-100 search-mg" >

						<a href="#" class="d-flex align-items-center conta mt-2 ">

							<img src="../imagens/carrinho.png" class="align-middle  h-100 mb-3 mt-2" >
						
						</a>
						
						
						
					</div>

				</div>

				<div class = "col-xl-2 border border-dark mt-1 mb-1">

					<div class = "d-flex justify-content-start h-100 search-mg" >

						<img src="../imagens/user.png" class="align-middle ms-2 mb-2 mt-1" >

						<a href="#" class="d-flex align-items-center conta">

							<span class="d-flex align-items-center ms-2 mt-1 mb-2 text-dark" style="font-size:1.4vh;">Minha Conta</span>

						</a>

					</div>



				</div>

			</div>
			
		</div>

	</div>


	<div class="container ">

		<main>
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center " >

				<div class="collapse navbar-collapse" >

					<div class="row mt-3  ">

						<div class="col-xl-12 menu-h nav-item active d-flex justify-content-center">

							<div class = "col-xl-2 border border-dark d-flex justify-content-center nav-item active">

								<a class="nav-link d-flex align-items-center" href="#"> Início </a>

							</div>

							<div class = "col-xl-2 border border-dark d-flex justify-content-center round nav-item">

								<a class="nav-link d-flex align-items-center" href="#"> Empresa </a>

							</div>

							<div class = "col-xl-2 border border-dark d-flex justify-content-center nav-item dropdown">

								<a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
									aria-haspopup="true" aria-expanded="false"
								>

									Produtos
							
								</a>
								
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">

									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
										aria-haspopup="true" aria-expanded="false"
									>

										Informática
								
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">

										<a class="dropdown-item" href="#">Action</a>

										<a class="dropdown-item" href="#">Another action</a>

									</div>

									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
										aria-haspopup="true" aria-expanded="false"
									>

										Vestuário
								
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">

										<a class="dropdown-item" href="#">Action</a>

										<a class="dropdown-item" href="#">Another action</a>

									</div>

								</div>
														
							</div>

							<div class = "col-xl-2 border border-dark d-flex justify-content-center nav-item">

								<a class="nav-link d-flex align-items-center" href="#"> Cadastro </a>

							</div>

						</div>
						
					</div>	
					
				</div>
			
			</nav>		

			<div class="row g-5 mt-4">
				
				<div class="col-md-7 col-lg-12">

					<h4 class="mb-3">Lista</h4>

					<hr>

					<form class="needs-validation" novalidate>

						
						<div class="row g-3">

							Em construção...

							<hr>

						</div>

						<a href="editaVeiculo.php" class = "w-25 btn btn-primary btn-lg" >Novo</a>

					</form>
					
				</div>

			</div>

		</main>

		<footer class="my-5 pt-5 text-muted text-center text-small">

			<p class="mb-1">&copy; 2017–2021 Company Name</p>
			<ul class="list-inline">

			<li class="list-inline-item"><a href="#">Privacy</a></li>

			<li class="list-inline-item"><a href="#">Terms</a></li>

			<li class="list-inline-item"><a href="#">Support</a></li>

			</ul>

		</footer>

	</div>

	<?php include_once "footer.php"; ?>