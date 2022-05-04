<?php
include_once "index.php";

$us_social      = @$_GET["social"];
// $us_fantasia    = @$_GET["fantasia"];
// $us_cnpj     = @$_GET["cnpj"];
// $us_ie       = @$_GET["ie"];
// $us_telefone  = @$_GET["telefone"];
// $us_email    = @$_GET["email"];

$fornecedor = new Fornecedor($us_social);

$dao = $factory->getFornecedorDao();
$dao->insere($fornecedor);

?>