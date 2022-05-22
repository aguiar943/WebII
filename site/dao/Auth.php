

<?php

 class Auth{

    private static $nome_botao = "Minha Conta";
    private static $button_link = "Cadastrar";
    private static $usuario = "Bem vindo";

    public static function Logar($botao, $login_encontrado, $isMessage){
     
          $full_url = explode("/", $_SERVER['REQUEST_URI']);
          $page = end($full_url);

        if( isset($_POST['login']) ){

            $_SESSION['ativo'] = 1;
         
            if(!$login_encontrado && $isMessage){

                return "Usuário não encontrado !";

            } else if($login_encontrado && $isMessage) {

                return "<script type = 'text/javascript'>window.location.href='index.php'</script>";

            } else {

                return 'Bem vindo';

            }
        
        } else if (isset($_POST['btn-login']) && isset($_SESSION['ativo'])) {
        
            session_destroy();

            return "<script type = 'text/javascript'>window.location.href='index.php'</script>";
            
        } else if(isset($_POST['btn-login']) && !isset($_SESSION['ativo'])){

            return "<script type = 'text/javascript'>window.location.href='login.php'</script>";

        } else if(isset($_SESSION['ativo'])){

            $_SESSION['nome_botao'] = "Sair";

            self::$button_link =  "Config" ;

            return 'Olá Fulano';
        
        } else {

            $_SESSION['nome_botao'] = "Login";

            self::$button_link =  "Cadastrar" ;

            if($page != "login.php"){

                session_destroy();

            }
            
            return 'Bem vindo';
            
        }

    }
  
    public static function Cadastrar($botao){

        if($_SESSION['nome_botao'] == "Login" && isset($botao)){
            
            return "Cadastro";

        } else if(isset($_SESSION['ativo'])) {

            return "Listagem";

        }

    }
  
    public static function getButtonLink(){

        if(self::$button_link == "Cadastrar"){

            return "window.location.href='cadastro.php'";

        } else  {

            return "window.location.href='listagem.php'";
            
        }
    }
  
     public static function iniciarSessao(){
		
        if(!isset($_SESSION['ativo'])){

           session_start();

           self::$button_link =  "window.location.href='cadastro.php'" ;

         }

	   }

    public static function getNomeBotao(){
        
        return self::$nome_botao;
    }

 }

?>
