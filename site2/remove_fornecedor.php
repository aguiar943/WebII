<?php
require "fachada.php"; 

$fo_cnpj = @$_GET["cnpj"];

$fornecedor = new Fornecedor(null, null, $fo_cnpj, null, null, null);
$dao = $factory->getFornecedorDao();
$dao->RemoveFornecedorPorCNPJ($fo_cnpj);

echo "<script>alert('Fornecedor removido com sucesso.');</script>"; 
echo "<meta http-equiv='refresh' content='0, url=listagem_fornecedor.php?=1'>";   
exit;
?>