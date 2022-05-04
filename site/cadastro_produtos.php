<?php 
require "fachada.php"; 
?>
<body class="bg-light">
<div class="container py-3">
  <div class="" role="document">
		<div class="modal-content rounded-5 shadow">
			<form class="p-4 p-md-5 border rounded-3 bg-light">
				<div class="modal-header p-6 pb-4 border-bottom-0">
					<h2 class="fw-bold mb-0">Cadastro Produtos</h2>
				</div>
				<?php

echo "<section>";
$dao = $factory->getProdutoDao();
$produtos = $dao->buscaTodosProdutos();
if($produtos) {
 
	echo "<table class='table table-hover table-responsive table-bordered'>";
	echo "<tr>";
		echo "<th>Barras</th>";
		echo "<th>Descrição</th>";
		echo "<th>Preço de venda</th>";
	echo "</tr>";

	foreach ($produtos as $produto) {
		echo "<tr>";
			echo "<td>{$produto->getCdBarras()}</td>";
			echo "<td>{$produto->getDescricao()}</td>";
			echo "<td>{$produto->getPrecoVenda()}</td>";
			echo "<td>";
				echo "<a href='mostra_usuario.php?cd_barras={$produto->getCdBarras()}' class='btn btn-primary left-margin'>";
				echo "<span class='glyphicon glyphicon-list'></span> Visualizar ";
				echo "</a>";
				echo "<a href='modifica_usuario.php?cd_barras={$produto->getCdBarras()}' class='btn btn-info left-margin'>";
				echo "<span class='glyphicon glyphicon-edit'></span> Alterar";
				echo "</a>";
				echo "<a href='remove_produto.php?cd_barras={$produto->getCdBarras()}' class='btn btn-danger left-margin'";
				echo "onclick=\"return confirm('Confirma exclusão do produto?')\">";
				echo "<span class='glyphicon glyphicon-remove'></span> Excluir";
				echo "</a>";
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
 
echo "<a href='novo_produto.php' class='btn btn btn-success left-margin'>";
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