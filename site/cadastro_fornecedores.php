<?php 
require "fachada.php"; 
?>
<body class="bg-light">
<div class="container py-3">
  <div class="" role="document">
		<div class="modal-content rounded-5 shadow">
			<form class="p-4 p-md-5 border rounded-3 bg-light">
				<div class="modal-header p-6 pb-4 border-bottom-0">
					<h2 class="fw-bold mb-0">Cadastro Fornecedores</h2>
				</div>
				<div class="col-lg-13">
                    <div class="form-group input-group">
                        <input type="text" class="form-control" id="palavra" placeholder="Pesquisar">
                        <span class="input-group-btn">
                            <button class="btn btn-outline-info" id="buscar" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
				<br>

					<script>
						function buscar(palavra)
						{
							//O método $.ajax(); é o responsável pela requisição
							$.ajax
									({
										//Configurações
										type: 'POST',//Método que está sendo utilizado.
										dataType: 'php',//É o tipo de dado que a página vai retornar.
										url: 'busca_fornecedor.php',//Indica a página que está sendo solicitada.
										//função que vai ser executada assim que a requisição for enviada
										beforeSend: function () {
											$("#dados").html("Carregando...");
										},
										data: {palavra: palavra},//Dados para consulta
										//função que será executada quando a solicitação for finalizada.
										success: function (msg)
										{
											$("#dados").html(msg);
										}
									});
						}
						$('#buscar').click(function () {
							buscar($("#palavra").val())
						});
					</script>
<?php

echo "<section>";
$dao = $factory->getFornecedorDao();
$fornecedores = $dao->buscaTodosFornecedores();
if($fornecedores) {
 
	echo "<table class='table table-hover table-responsive table-bordered'>";
	echo "<tr>";
		echo "<th>CNPJ</th>";
		echo "<th>Razão Social</th>";
		echo "<th>Fantasia</th>";
	echo "</tr>";

	foreach ($fornecedores as $fornecedor) {

		echo "<tr>";
			echo "<td>{$fornecedor->getCNPJ()}</td>";
			echo "<td>{$fornecedor->getSocial()}</td>";
			echo "<td>{$fornecedor->getFantasia()}</td>";
			echo "<td>";
				echo "<a href='modifica_fornecedor.php?cnpj={$fornecedor->getCNPJ()}' class='btn btn-info left-margin'>";
				echo "<span class='glyphicon glyphicon-edit'></span> Alterar";
				echo "</a>";
				echo "<a href='remove_fornecedor.php?cnpj={$fornecedor->getCNPJ()}' class='btn btn-danger left-margin'";
				echo "onclick=\"return confirm('Confirma exclusão do fornecedor?')\">";
				echo "<span class='glyphicon glyphicon-remove'></span> Excluir";
				echo "</a>";
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
 
echo "<a href='novo_fornecedor.php' class='btn btn btn-success left-margin'>";
echo "Novo";
echo "</a>";

echo "</section>";
?>	
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