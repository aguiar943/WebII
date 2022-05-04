<?php
include_once "fachada.php";

$cd_barras = @$_GET["cd_barras"];

$produto = new Produto(null, null, null, null, $cd_barras, null, null, null);
$dao = $factory->getProdutoDao();
$dao->RemoveProdutoPoBarras($cd_barras);

header("Location: index.php");
exit;
?>