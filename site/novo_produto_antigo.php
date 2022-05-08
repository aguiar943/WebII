<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="icon" href="imagens/simbolo.png" />
		<title>
			Produto - inclusão
		</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
       <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="imagens/logosemfundo.png" width="300" height="70"></img>
      </a>
    </div>
  </header>
  <div class="" role="document">
	<div class="modal-content rounded-5 shadow">
		<form class="p-4 p-md-5 border rounded- bg-light">
			<div class="modal-header p-6 pb-3 border-bottom-0">
					<h4 class="fw-bold mb-0">CADASTRO - PRODUTOS</h4>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="text-center">
							<img src="../imagens/logosemfundo.png" width="300" height="70" class="rounded" alt="...">
						  </div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-3">
							<input type="text" class="form-control" id="idBarrasProduto" placeholder="Código Barras">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" id="idReferenciaProduto" placeholder="Código Referencia">
						</div>
						
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-7">
							<input type="text" class="form-control" id="idDescricaoProduto" placeholder="Descricao">
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-2">
							<input type="text" class="form-control" id="idCustoProduto" placeholder="Preço Custo">
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control" id="idVendaProduto" placeholder="Preço Venda">
						</div>
						<div class="form-group col-md-1">
							<select class="form-control" id="idUnidadeProduto">
								<option></option>
								<option>UN</option>
								<option>PC</option>
								<option>MT</option>
								<option>KG</option>	
							  </select>
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control" id="idEstoqueProduto" placeholder="Estoque">
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-5">
							<input type="text" class="form-control" id="idMarcaProduto" placeholder="Marca">
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control" id="idNCMProduto" placeholder="NCM">
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="form-group col-md-7">
						<select class="form-control" id="idFornecedoreProduto">
							<option></option>
						  </select>
					</div>
				</div>
				
				

				<hr class="my-4">
				<small class="text-muted"></small>
				<button class="w-100 btn btn btn-success" type="submit">Cadastrar</button><br><br>
			</form>
		</div>
	</div>
<hr class="featurette-divider">
  <footer class="container">
   <p>&copy; 2022–2022 Web II &middot; <a href="index.php">Compre Aí</a> &middot;</p>
  </footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>	
</html>
