<?php

include_once "fachada.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$motor = $_POST['motor'];
$ano = $_POST['ano'];

$dao = $factory->getVeiculoDao();
$veiculo = $dao->buscaPorId($id);



if($veiculo===null) {
    $veiculo = new Veiculo($id, $marca, $nome, $motor, $ano, $cor);
    $dao->insere($veiculo);
    echo 'inseriu';
} else {
    $veiculo->setNome($nome);
    $veiculo->setMarca($marca);
    $veiculo->setCor($cor);
    $veiculo->setMotor($motor);
    $veiculo->setAno($ano);
    $dao->altera($veiculo);
    echo 'erro';
}

header("Location: http://localhost:8080/Aula04/veiculo.php");


?>
<!-- header("Location: http://localhost:8080/Aula04/veiculo.php"); -->
