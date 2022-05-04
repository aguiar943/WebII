<?php
include_once "fachada.php";

$us_cpf = @$_GET["cpf"];

$usuario = new Usuario($us_cpf,null,null,null,null,null,null,null);
$dao = $factory->getUsuarioDao();
$dao->removePorCPF($us_cpf);

header("Location: index.php");
exit;
?>