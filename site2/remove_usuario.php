<?php
include_once "fachada.php";

$us_cpf = @$_GET["cpf"];

$usuario = new Usuario($us_cpf,null,null,null,null,null,null,null);
$dao = $factory->getUsuarioDao();
$dao->removePorCPFSelecionado($us_cpf);

echo "<script>alert('Usuário removido com sucesso.');</script>"; 
echo "<meta http-equiv='refresh' content='0, url=listagem_usuarios.php?=1'>";   
exit;
?>