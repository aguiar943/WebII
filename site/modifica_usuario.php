<?php
require "fachada.php"; 

$us_cpf      = @$_GET["cpf"];

$dao = $factory->getUsuarioDao();
$usuario = $dao->buscaPorCPF($us_cpf);

// layout do cabeçalho
 ?>
 <section>
 <div class="" role="document">
	<div class="modal-content rounded-5 shadow">
		<form  class="p-4 p-md-5 border rounded-3 bg-light" action="altera_usuario.php" method="get">
			<div class="modal-header p-6 pb-4 border-bottom-0">
					<h4 class="fw-bold mb-0">Altera usuário</h4>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
						<input type="text" class="form-control" name="nome" value='<?php echo $usuario->getNome();?>'  placeholder="Nome completo">
						</div>
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-3">
							<input type="text" class="form-control" readonly="readonly" name="cpf" value='<?php echo $usuario->getCPF();?>' placeholder="CPF">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="rg" value='<?php echo $usuario->getRG();?>' placeholder="RG">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="celular" value='<?php echo $usuario->getCelular();?>' placeholder="Celular">
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="telefone" value='<?php echo $usuario->getTelefone();?>' placeholder="Telefone2">
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" name="emailcliente" value='<?php echo $usuario->getEmail();?>' placeholder="Email">
						</div>
						<div class="col">
							<input type="password" class="form-control" name="senha" value='<?php echo $usuario->getSenha();?>' placeholder="Senha">
						</div>
						<div class="col">
							<input type="text" class="form-control" name="cartao" value='<?php echo $usuario->getCartao();?>' placeholder="Cartão de Crédito">
						</div>
					</div>
				</div>
				<hr class="my-4">
				<small class="text-muted"></small>
				<button type="submit" class="w-100 btn btn btn-success">Altera</button><br><br>
				<a class="w-100 btn btn-secondary" href="cadastro_usuarios.php">Cancela</a>
				<input type='hidden' name='cpf' value='<?php echo $usuario->getCPF();?>'/>
			</form>
		</div>
	</div>
</section>
<?php
include "footer.php"
?>


