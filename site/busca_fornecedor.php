<?php
include_once "fachada.php";

// procura usuários

$palavra = @$_POST['palavra'];

$dao = $factory->getFornecedorDao();
$fornecedores = $dao->PesquisaFornecedor($palavra);

?>
<section class="panel col-lg-9">

    <header class="panel-heading">
        Dados da busca:
    </header>
    <?php
    if(sizeof($fornecedores)>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_profile"></i> CNPJ</th>
            </tr>
            <?php 
            foreach ($fornecedores as $fornecedor) {
            ?>
            <tr>
                <td><?=$fornecedores->getNome();?></td>
                <td><?=$fornecedores->getCNPJ();?></td>
            </tr>
            <br><p><br><p>
            <br><p>
            <br><p>
            <br><p>
                
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>
