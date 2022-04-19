<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="icon" href="../imagens/simbolo.png" />
		<title>
			Login
		</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="home.php" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="../imagens/logosemfundo.png" width="300" height="70"></img>
      </a>
    </div>
  </header>
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-5 shadow">
			<form class="p-4 p-md-5 border rounded-3 bg-light">
				<div class="modal-header p-5 pb-4 border-bottom-0">
					<h2 class="fw-bold mb-0">LOGIN</h2>
				</div>
				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Senha</label>
				</div>
				<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Lembre-me
					<br><a href='recupera_senha.php'>Esqueci minha senha</a>
				</label>
				</div>
				<button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
				<hr class="my-4">
				<small class="text-muted"></small>
				<a class="w-100 btn btn-secondary" href="cadastro.php">Cadastrar-se</a>
			</form>
		</div>
	</div>

<hr class="featurette-divider">
  <footer class="container">
  <p>&copy; 2022–2022 Web II &middot; <a href="home.php">Compre Aí</a> &middot;</p>
  </footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>	
</html>