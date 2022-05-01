<?php

include_once "fachada.php";

?>

<!-- 

<body>

-->

	<div class="container ">
		<br>
		<main>
		 <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<!--	<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
				-->	
				 	<img class="d-block w-100" src="imagens/produtos/tv.jpg">
					<div class="container">
						<div class="carousel-caption text-start">
							<font color= "red"><h1>Produto</h1>
							<p>Produto</p></font>
						 <!--	<p><a class="btn btn-lg btn-primary" href="login.html">Login</a></p>
						--></div>
					</div>
				</div>
				<div class="carousel-item">
				<!--	<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
				-->
					<img class="d-block w-100" src="imagens/produtos/celular.jpg">	
					<div class="container">
						<div class="carousel-caption">
						<font color= "red"><h1>Produto</h1>
							<p>Produto</p></font>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
					-->
					<img class="d-block w-100" src="imagens/produtos/maquina.jpg">
					<div class="container">
						<div class="carousel-caption text-end">
						<font color= "red"><h1>Produto</h1>
							<p>Produto</p></font>
							<!--<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
						</div>
					</div>
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Proximo</span>
			</button>
		 </div>
			<br>
			<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/celular.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 2</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="100" height="500" src="imagens/produtos/maquina.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 3</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/4.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="100" height="500" src="imagens/produtos/5.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/carrinho.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/carrinho.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/carrinho.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/carrinho.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$49,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
			</div>

			<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<!--	<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
				-->	
				 	<img class="d-block w-100" src="imagens/produtos/pelicula.jpg">
					<div class="container">
						<div class="carousel-caption text-start">
						<font color= "red"><h1>Produto</h1>
							<p>Produto</p></font>
						 <!--	<p><a class="btn btn-lg btn-primary" href="login.html">Login</a></p>
						--></div>
					</div>
				</div>
				<div class="carousel-item">
				<!--	<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
				-->
					<img class="d-block w-100" src="imagens/produtos/secadora.jpg">	
					<div class="container">
						<div class="carousel-caption">
						<font color= "red"><h1>Produto</h1>
							<p>Produto</p></font>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
					-->
					<img class="d-block w-100" src="imagens/produtos/led.jpg">
					<div class="container">
						<div class="carousel-caption text-end">
						<font color= "red"><h1>Produto</h1>
							<p>Produto</p></font>
							<!--<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
						</div>
					</div>
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Proximo</span>
			</button>
		 </div>
			<br>
		 <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
		 <div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
				<div class="col">
				  <div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-body">
					  <ul class="list-unstyled mt-3 mb-4">
						<div class="col-md-5">
							<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500" src="imagens/produtos/tv.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
						</div>
					  </ul>
					  <h5 class="card-title pricing-card-title">Produto 1</h5>
					  <h2 class="card-title pricing-card-title">R$4.900,90</h2>
					</div>
				  </div>
				</div>
			</div>
		</main>
	</div>
	<?php include_once "footer.php"; ?>