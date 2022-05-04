<?php
include_once "fachada.php";

$fo_cnpj = @$_GET["cnpj"];

$fornecedor = new Fornecedor(null, null, $fo_cnpj, null, null, null);
$dao = $factory->getFornecedorDao();
$dao->RemoveFornecedorPorCNPJ($fo_cnpj);

header("Location: index.php");
exit;
?>