<?php
include_once "fachada.php";

$us_cpf      = @$_GET["cpf"];
$us_email    = @$_GET["emailcliente"];
$us_nome     = @$_GET["nome"];
$us_rg       = @$_GET["rg"];
$us_celular  = @$_GET["celular"];
$us_telefone = @$_GET["telefone"];
$us_senha    = @$_GET["senha"];
$us_cartao   = @$_GET["cartao"];

$usuario = new Usuario($us_cpf, $us_email, $us_nome, $us_rg, $us_celular, $us_telefone, $us_senha,$us_cartao);

$dao = $factory->getUsuarioDao();
$dao->insere($usuario);

?>