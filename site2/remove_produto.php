<?php
include_once "fachada.php";

$cd_barras = @$_GET["cd_barras"];

$produto = new Produto(null, null, null, null, $cd_barras, null, null, null);
$dao = $factory->getProdutoDao();
$dao->RemoveProdutoPoBarras($cd_barras);

echo "<script>alert('Produto removido com sucesso.');</script>"; 
echo "<meta http-equiv='refresh' content='0, url=listagem_produtos.php?=1'>";   
exit;
?>