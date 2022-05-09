<?php

include_once "fachada.php";

?>

<!-- 

<body>

-->

	<div class="container h-50">

		<br>

		<main>

			<div id="myCarousel" class="carousel slide " data-bs-ride="carousel">

				<?php

					$dao = $factory->getProdutoDao();

					$produtos = $dao->buscaTodos();

					$prods = array();

					$first = true;

					if($produtos) { ?>

						<div class="carousel-indicators">

							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"> </button>

							<?php 

								for($i = 0; $i < 11; $i++){ ?>

									<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?= ($i+1); ?>" aria-label="Slide <?= ($i+2); ?>"> </button> <?php 

								}
							
							?>

						</div>

						<div class="carousel-inner"> <?php

							foreach ($produtos as $produto){
								
								extract($produto);  

								$prods[]  = $dao->buscaPorId($id);

								if($first){

									echo "<div class='carousel-item active'>" ;

									$first = false;

								} else {

									echo "<div class='carousel-item'>" ;

								}
								
								?>

									<img class="d-block w-100" src="imagens/produtos/tv.jpg">

									<div class="container">

										<div class="carousel-caption text-start">

											<font color= "red">

												<h1> <?= $subcategoria . " " . $modelo; ?> </h1>
												
												<p> <?= $marca; ?> </p>

											</font>

										</div>

									</div>

								</div><?php 

							} ?>

						</div> <?php 

					}

					?>

				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">

					<span class="carousel-control-prev-icon" aria-hidden="true"> </span>

					<span class="visually-hidden"> Anterior </span>

				</button>

				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">

					<span class="carousel-control-next-icon" aria-hidden="true"> </span>

					<span class="visually-hidden"> Proximo </span>

				</button>

		 	</div>

			<br>

			<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

				<?php 
				
				for ($i = 0; $i < count($prods); $i++){
					
					$produto = $prods[$i];

					$img = $produto->getImgsVitrine()[0]->getPath($produto);
					
					?>

					<div class="col">

						<div class="card mb-4 rounded-3 shadow-sm">

							<div class="card-body">

								<ul class="list-unstyled mt-3 mb-4">

									<div class="col-md-5">

										<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  
											width="500" height="500" src="<?= $img ; ?>" role="img" aria-label="Placeholder: 500x500" 
											preserveAspectRatio="xMidYMid slice" focusable="false"
										>
											
										<rect width="100%" height="100%" fill="#eee"/>
										
										<text x="50%" y="50%" fill="#aaa" dy=".3em"> </text>
									
									</div>

								</ul>

								<h5 class="card-title pricing-card-title"> 

									<?= $produto->getSubcategoria() . " " . $produto->getMarca() . " " . $produto->getModelo() ; ?> 

								</h5>

								<h2 class="card-title pricing-card-title"> <?= "R$ " . $produto->getPrecoVenda(); ?> </h2>

							</div>

						</div>

					</div><?php
					
				} ?>

				

			</div>

			<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

				<div class="carousel-indicators">

					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"> </button>

					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"> </button>

					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"> </button>

				</div>

				<div class="carousel-inner">

					<div class="carousel-item active">

						<img class="d-block w-100" src="imagens/produtos/pelicula.jpg">

						<div class="container">

							<div class="carousel-caption text-start">

								<font color= "red">
									
									<h1> Produto </h1>

									<p> Produto </p>

								</font>

							</div>

						</div>

					</div>

					<div class="carousel-item">

						<img class="d-block w-100" src="imagens/produtos/secadora.jpg">	

						<div class="container">

							<div class="carousel-caption">

								<font color= "red">

									<h1> Produto </h1>

									<p> Produto </p>

								</font>

							</div>

						</div>

					</div>

					<div class="carousel-item">

						<img class="d-block w-100" src="imagens/produtos/led.jpg" >

						<div class="container">

							<div class="carousel-caption text-end">

								<font color= "red">

									<h1> Produto </h1>
									<p> Produto </p>

								</font>

							</div>

						</div>

					</div>

				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">

					<span class="carousel-control-prev-icon" aria-hidden="true"> </span>

					<span class="visually-hidden"> Anterior </span>

				</button>

				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">

					<span class="carousel-control-next-icon" aria-hidden="true"> </span>

					<span class="visually-hidden"> Proximo </span>

				</button>

		 	</div>

			<br>

		 	<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

		 		<div class="col">

					<div class="card mb-4 rounded-3 shadow-sm">

						<div class="card-body">

							<ul class="list-unstyled mt-3 mb-4">

								<div class="col-md-5">

									<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
										width="500" height="500" src="imagens/produtos/tv.jpg" role="img"
										aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
									><rect width="100%" height="100%" fill="#eee"/>
									
									<text x="50%" y="50%" fill="#aaa" dy=".3em"> </text>
								
								</div>

							</ul>

							<h5 class="card-title pricing-card-title"> Produto 1 </h5>

							<h2 class="card-title pricing-card-title"> R$4.900,90 </h2>

						</div>

					</div>

				</div>

				<div class="col">

				  <div class="card mb-4 rounded-3 shadow-sm">

					<div class="card-body">

						<ul class="list-unstyled mt-3 mb-4">

							<div class="col-md-5">

								<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
									width="500" height="500" src="imagens/produtos/tv.jpg" role="img"
									aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
								>
								
								<rect width="100%" height="100%" fill="#eee"/>
								
								<text x="50%" y="50%" fill="#aaa" dy=".3em"> </text>
							
							</div>

						</ul>

						<h5 class="card-title pricing-card-title"> Produto 1 </h5>

						<h2 class="card-title pricing-card-title"> R$4.900,90 </h2>

					</div>

				  </div>

				</div>

				<div class="col">

					<div class="card mb-4 rounded-3 shadow-sm">

						<div class="card-body">

							<ul class="list-unstyled mt-3 mb-4">

								<div class="col-md-5">

									<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  
										width="500" height="500" src="imagens/produtos/tv.jpg" role="img" 
										aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
									>
										
									<rect width="100%" height="100%" fill="#eee"/>

									<text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
								
								</div>

							</ul>

							<h5 class="card-title pricing-card-title"> Produto 1 </h5>

							<h2 class="card-title pricing-card-title"> R$4.900,90 </h2>

						</div>

					</div>

				</div>

				<div class="col">

					<div class="card mb-4 rounded-3 shadow-sm">

						<div class="card-body">

							<ul class="list-unstyled mt-3 mb-4">

								<div class="col-md-5">

									<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
										width="500" height="500" src="imagens/produtos/tv.jpg" role="img"
										aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
									>
									
									<rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"> </text>
								
								</div>

							</ul>

							<h5 class="card-title pricing-card-title"> Produto 1 </h5>

							<h2 class="card-title pricing-card-title"> R$4.900,90 </h2>

						</div>

					</div>

				</div>

				<div class="col">

					<div class="card mb-4 rounded-3 shadow-sm">

						<div class="card-body">

							<ul class="list-unstyled mt-3 mb-4">

								<div class="col-md-5">

									<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
										width="500" height="500" src="imagens/produtos/tv.jpg" role="img" 
										aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
									>
									
									<rect width="100%" height="100%" fill="#eee"/>
									
									<text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
								
								</div>

							</ul>

							<h5 class="card-title pricing-card-title"> Produto 1 </h5>

							<h2 class="card-title pricing-card-title"> R$4.900,90 </h2>

						</div>

					</div>

				</div>

				<div class="col">
					
					<div class="card mb-4 rounded-3 shadow-sm">

						<div class="card-body">

							<ul class="list-unstyled mt-3 mb-4">

								<div class="col-md-5">

									<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
										width="500" height="500" src="imagens/produtos/tv.jpg" role="img"
										aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
									>
									
									<rect width="100%" height="100%" fill="#eee"/>
									
									<text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
								
								</div>

							</ul>

							<h5 class="card-title pricing-card-title"> Produto 1 </h5>

							<h2 class="card-title pricing-card-title"> R$4.900,90 </h2>

						</div>

					</div>

				</div>
				
			</div>

		</main>

	</div>

	<?php include_once "footer.php"; ?>