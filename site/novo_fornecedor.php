<?php 

  require "fachada.php";

?>
<body class="bg-light">
<div class="container py-3">
  <div class="" role="document">
	<div class="modal-content rounded-5 shadow">
		<form class="p-4 p-md-5 border rounded-3 bg-light"  action="insere_fornecedor.php" method="get">
			<div class="modal-header p-6 pb-4 border-bottom-0">
					<h4 class="fw-bold mb-0">Novo fornecedor</h4>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" name="social" placeholder="Razão Social">
						</div>
						<div class="col">
							<input type="text" class="form-control" name="fantasia" placeholder="Fantasia">
						</div>
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-4">
							<input type="text" class="form-control" name="cnpj" placeholder="CNPJ">
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control" name="ie" placeholder="IE">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="telefone" placeholder="Telefone">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="email" placeholder="Email">
						</div>
					</div>
				</div>				
				<hr class="my-4">
				<small class="text-muted"></small>
				<button type="submit" class="w-100 btn btn btn-success">Cadastrar</button><br><br>
				<!-- <a href="novo_endereco.php" button class="w-100 btn btn btn-success">Proximo</a></button><br><br> -->
			</form>
		</div>
	</div>
<?php include 'footer.php'; ?>