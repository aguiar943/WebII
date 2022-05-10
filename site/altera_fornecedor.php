<?php
include_once "fachada.php";

$fo_social      = @$_GET["social"];
$fo_fantasia    = @$_GET["fantasia"];
$fo_cnpj        = @$_GET["cnpj"];
$fo_ie          = @$_GET["ie"];
$fo_telefone    = @$_GET["telefone"];
$fo_email       = @$_GET["email"];


$fornecedor = new Fornecedor($fo_social, $fo_fantasia, $fo_cnpj, $fo_ie, $fo_telefone, $fo_email);
$dao = $factory->getFornecedorDao();
$dao->alteraFornecedor($fornecedor);

header("Location: cadastro_fornecedores.php");
exit;
?>