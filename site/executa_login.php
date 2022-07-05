<?php 
require "fachada.php"; 
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 

$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 

if(!$login || !$senha) 
{ 
    echo "Você deve digitar sua senha e login!<br>"; 
    echo "<a href='login.php'>Efetuar Login</a>";
    exit; 
}  

$dao = $factory->getUsuarioDao();
$usuario = $dao->buscaPorCPF($login);

$problemas = FALSE;
if($usuario) {
    // Agora verifica a senha 
    if(!strcmp($senha, $usuario->getSenha())) 
    { 
        $_SESSION["nome_usuario"] = stripslashes($usuario->getNome()); 
        //$_SESSION["permissao"]= $dados["postar"]; 
        echo "<script>alert('Usuário logado com sucesso.');</script>"; 
        echo "<meta http-equiv='refresh' content='0, url=index.php'>";   
        exit; 
    } else {
        $problemas = TRUE; 
    }
} else {
    echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
    $problemas = TRUE; 
}

if($problemas==TRUE) {
    echo "<script type='text/javascript'>location.href = 'index.php';</script>";
    exit; 
}
?>
