<?php
include_once "fachada.php";

// procura usuários

$palavra = @$_POST['palavra'];

$dao = $factory->getUsuarioDao();
$usuarios = $dao->PesquisaUsuario($palavra);

?>
<section class="panel col-lg-9">
<h4>123</h4>
    <?php
    if(sizeof($usuarios)>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_profile"></i> CPF</th>
            </tr>
            <?php 
            foreach ($usuarios as $usuario) {
            ?>
            <tr>
                <td><?=$usuario->getNome();?></td>
                <td><?=$usuario->getCPF();?></td>
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
