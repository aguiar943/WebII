<?php 

	include "fachada.php";
	
	$dao = $factory->getUsuarioDao();
	

?>

<div class="container py-3">

	<div class="modal-dialog" role="document">
	
		<div class="modal-content rounded-5 shadow">
		
			<section>
			
				<form method="POST" class="p-4 p-md-5 border rounded-3 bg-light" enctype="multipart/form-data">
					
					<div class="modal-header p-5 pb-4 border-bottom-0">
					
						<h2 class="fw-bold mb-0"> LOGIN </h2>
						
					</div>
					
					<div class="form-floating mb-3">
					
						<input type="text" class="form-control" id="login" name="cpf" placeholder="number">
						
						<label for="floatingInput"> CPF </label>
						
					</div>
					
					<div class="form-floating mb-3">
					
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
						
						<label for="floatingPassword"> Senha </label>
						
					</div>
					
					<div class="checkbox mb-3">
					
						<label>
						
							<input type="checkbox" value="remember-me"> Lembre-me
							
							<br><a href='recupera_senha.php'> Esqueci minha senha </a>
							
						</label>
						
					
					</div>

					<span class = "mb-5" name = "result" >

						<?php

							if(isset($_POST['login'])){

								Auth::recuperarUsuario($factory);

								echo Auth::Logar($_POST,  $dao->buscaPorCPF(), true);

							}		
					
						?>

					</span>

					<button class="w-100 btn btn-lg btn-primary" type="submit" name = "login" >

						Logar
					
					</button>

					<hr class="my-4">
					
					<small class="text-muted"> </small>
					
					<a class="w-100 btn btn-secondary" href="cadastro.php"> Cadastrar-se </a>

				</form>

			</section>
			
		</div>
		
	</div>

<hr class="featurette-divider">

<?php

	include "footer.php";

?>