<?php
include_once "fachada.php";

$us_cpf = @$_GET["cpf"];

$usuario = new Usuario($us_cpf,null,null,null,null,null,null,null,null);
$dao = $factory->getUsuarioDao();
$dao->removePorCPF($us_cpf);

echo "<script>alert('Usuário removido com sucesso.');</script>"; 
echo "<meta http-equiv='refresh' content='0, url=cadastro_usuarios.php'>";  
exit;
?>