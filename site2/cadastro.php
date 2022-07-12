<?php include "fachada.php"; 

	$dao = $factory->getUsuarioDao();

?>

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
		<form  class="p-4 p-md-5 border rounded-3 bg-light" method="post">
			<div class="modal-header p-6 pb-4 border-bottom-0">
					<h4 class="fw-bold mb-0">CADASTRO USUÁRIO</h4>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
						<input type="text" class="form-control" name="nome" placeholder="Nome completo" maxlength="75" >
						</div>
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="cpf" placeholder="CPF" maxlength="11" >
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="rg" placeholder="RG" maxlength="11">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="celular" placeholder="Celular" maxlength="11">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="telefone" placeholder="Telefone" maxlength="10">
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">

							<input type="text" class="form-control" name="email" placeholder="Email" maxlength="55">
						</div>

						<div class="col">

							<select class="form-control" name="provedor" >

								<option value="@Provedor" selected>@Provedor</option>
								<option value = "@gmail" >@gmail.com</option>
								<option value = "@gmail" >@gmail.com</option>
								<option value = "@outlook.com.br" >@outlook.com.br</option>
								<option value = "@outlook.com" >@outlook.com</option>
								<option value = "@yahoo.com.br" >@yahoo.com.br</option>
								<option value = "@hotmail.com" >@hotmail.com</option>
								<option value = "@protonmail.com" >@protonmail.com</option>


							</select>


						</div>

						<div class="col">
							<input type="text" class="form-control" name="senha" placeholder="Senha" maxlength="15">
						</div>
						<div class="col">
							<input type="text" class="form-control" name="cartao" placeholder="Cartão de Crédito" maxlength="11">
						</div>
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
							<span>

								<?php 

									echo $dao->insere(null);		
								
								?>

							</span>
						</div>
					</div>
				</div>

				<hr class="my-4">
				<small class="text-muted"></small>
				<!-- <a href="novo_endereco.php" button class="w-100 btn btn btn-success">Proximo</a></button><br><br> -->
				
				<div class="form-floating mb-3">

					<div class="row">

						<div class="col-3">

							<button name = "env" type="submit" class="w-100 btn btn btn-success">Gravar</a></button><br><br>
							
						</div>

						<div class="col-3">

							<button name = "env" type="submit" class="w-100 btn btn btn-success">

								<a href="index.php" style = "text-decoration: none; color:white;" > Voltar </a>

							</button><br><br>

						</div>

					</div>

				</div>

				
			</form>
		</div>
	</div>
<hr class="featurette-divider">

<?php include "footer.php"; ?>