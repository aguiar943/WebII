<?php

 class FornecedoresForm{

    public static function validar($fornecedor, $antigo_fornecedor, $fornecedor_cnpj){
        
        $campo = ltrim($fornecedor->getSocial(), " ");

        $name_spaces = substr_count($campo, " ");

        $fantasia = ltrim($fornecedor->getFantasia(), " ");

        $fantasia_spaces = substr_count($fantasia, " ");


        $email_numbers = preg_match_all( "/[0-9]/", $fornecedor->getEmail() );

        $email_dots = substr_count( $fornecedor->getEmail(), ".");


        if(($antigo_fornecedor->getCNPJ() != $fornecedor->getCNPJ()) &&  ($fornecedor_cnpj != null) ){

            return "Erro: Já existe um fornecedor com este CNPJ !\n";

        } else if(!preg_match("/^[a-zA-Z  ]+$/", $campo) || $name_spaces > 4 || strlen($campo) < 6){

            return "Erro: A razão social informada está incorreta.\n";

        } else if(!preg_match("/^[a-zA-Z  ]+$/", $fantasia) || $fantasia_spaces > 4 || strlen($fantasia) < 6){

            return "Erro: O nome fantasia informado está incorreto.\n";

        } else if(strlen($fornecedor->getCNPJ()) != 14 || !ctype_digit($fornecedor->getCNPJ())){

            return "Erro: O cnpj informado está incorreto, ele é composto por 14 números.\n";

        } else if(strlen($fornecedor->getIE()) != 11 || !ctype_digit($fornecedor->getIE())){

            return "Erro: A inscrição estadual (IE) está incorreta, ela é composta por 11 números.\n";

        } else if(strlen($fornecedor->getTelefone()) < 10 || !ctype_digit($fornecedor->getTelefone())){

            return "Erro: O telefone informado está incorreto, ele é composto por 11 números :::.\n";

        } else if(!preg_match("/^[a-zA-Z0-9.]+$/", $fornecedor->getEmail()) || $email_numbers > 4 || $email_dots > 1 || 
                strlen($fornecedor->getEmail()) < 7 || $fornecedor->getProvedor() == "@Provedor"){

            return "Erro: O email informado está incorreto.\n";

        }  else {

            return "ok";

        }
        
        
        /*else {

            return "ok";

        }

        /*

        if(strlen($_POST['social']) < 6 || ctype_digit($_POST['social'] ) || $name_spaces < 4 ){

            return "Erro: A razão social informada está incorreta.\n";

        }else if(strlen($_POST['fantasia']) < 6 || ctype_digit($_POST['social'])){

            return "Erro: O nome fantasia informado está incorreto.\n";

        } else if(strlen($_POST['cnpj']) != 14 || !ctype_digit($_POST['cnpj'])){

            return "Erro: O cpf informado está incorreto.\n";

        } else if(strlen($_POST['ie']) != 11 || !ctype_digit($_POST['ie'])){

            return "Erro: A inscrição estadual (IE) está incorreta.\n";

        } else if(strlen($_POST['telefone']) < 10 || !ctype_digit($_POST['telefone'])){

            return "Erro: O cartão informado está incorreto :::.\n";

        } else if(strlen($_POST['email']) < 5 || strpos($_POST['email'], "@") !== false || 
            (isset($_POST['provedor']) && $_POST['provedor'] == "@Provedor")){

            return "Erro: O email informado está incorreto.\n";

        } else {

            return "ok";

        }*/

    }

    public static function getProdutoForm(){

        $fornecedor = new Fornecedor(

            $_POST['social'], $_POST['fantasia'],
            $_POST['cnpj'], $_POST['ie'],
            $_POST['telefone'], $_POST['email']

        );
        $fornecedor->setProvedor($_POST['provedor']);

        return $fornecedor;

    }

 }

?>