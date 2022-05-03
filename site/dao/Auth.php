

<?php

 class Auth{

    private static $nome_botao = "Login";


    public static function Logar($botao){

        if(!isset($_SESSION['ativo']) && isset($botao)){

            $_SESSION['ativo'] = 1;

            $_SESSION['nome_botao'] = "Sair";

            return 'Olá Fulano';
        
        
        } else if (isset($botao) && isset($_SESSION['ativo'])) {
        
            session_destroy();

            $_SESSION['nome_botao'] = "Login";

            return 'Minha Conta';
            
        }

    }

    public static function getNomeBotao(){
        
        return self::$nome_botao;
    }

 }

?>