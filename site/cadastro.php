<?php 

  require "fachada.php";

?>
<body class="bg-light">
<div class="container py-3">
  <div class="" role="document">
	<div class="modal-content rounded-5 shadow">
		<form  class="p-4 p-md-5 border rounded-3 bg-light" action="insere_usuario.php" method="get">
			<div class="modal-header p-6 pb-4 border-bottom-0">
					<h4 class="fw-bold mb-0">Novo Usuário</h4>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
						<input type="text" class="form-control" name="nome" placeholder="Nome completo">
						</div>
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="cpf" placeholder="CPF">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="rg" placeholder="RG">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="celular" placeholder="Celular">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="telefone" placeholder="Telefone2">
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" name="emailcliente" placeholder="Email">
						</div>
						<div class="col">
							<input type="text" class="form-control" name="senha" placeholder="Senha">
						</div>
						<div class="col">
							<input type="text" class="form-control" name="cartao" placeholder="Cartão de Crédito">
						</div>
					</div>
				</div>
				<hr class="my-4">
				<small class="text-muted"></small>
				<button type="submit" class="w-100 btn btn btn-success">Gravar</a></button><br><br>
			</form>
		</div>
	</div>
<?php include 'footer.php'; ?>