<?php
require "fachada.php"; 

$fo_cnpj      = @$_GET["cnpj"];

$dao = $factory->getFornecedorDao();
$fornecedor = $dao->buscaFornecedorCNPJ($fo_cnpj);

// layout do cabeçalho
 ?>
 <section>
 <div class="" role="document">
	<div class="modal-content rounded-5 shadow">
		<form  class="p-4 p-md-5 border rounded-3 bg-light" action="altera_fornecedor.php" method="get">
			<div class="modal-header p-6 pb-4 border-bottom-0">
					<h4 class="fw-bold mb-0">Altera fornecedor</h4>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" name="social" value='<?php echo $fornecedor->getSocial();?>' placeholder="Razão Social">
						</div>
						<div class="col">
							<input type="text" class="form-control" name="fantasia" placeholder="Fantasia" value='<?php echo $fornecedor->getFantasia();?>'>
						</div>
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-4">
							<input type="text" class="form-control" name="cnpj" placeholder="CNPJ" readonly="readonly" value='<?php echo $fornecedor->getCNPJ();?>'>
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control" name="ie" placeholder="IE" value='<?php echo $fornecedor->getIE();?>'>
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="telefone" placeholder="Telefone" value='<?php echo $fornecedor->getTelefone();?>'>
						</div>
						<div class="form-group col-md-3">
							<input type="text" class="form-control" name="email" placeholder="Email" value='<?php echo $fornecedor->getEmail();?>'>
						</div>
					</div>
				</div>				
				<hr class="my-4">
				<small class="text-muted"></small>
				<button type="submit" class="w-100 btn btn btn-success">Altera</button><br><br>
				<a class="w-100 btn btn-secondary" href="cadastro_fornecedores.php">Cancela</a>
				<input type='hidden' name='cnpj' value='<?php echo $fornecedor->getCNPJ();?>'/>
			</form>
		</div>
	</div>
</section>
<?php
include "footer.php"
?>


