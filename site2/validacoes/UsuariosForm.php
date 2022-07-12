<?php

 class UsuariosForm{

   public static function validar($usuario){

      $nome = ltrim($usuario->getNome(), " ");

      $name_spaces = substr_count($nome, " ");


      $email_numbers = preg_match_all( "/[0-9]/", $usuario->getEmail() );

      $email_dots = substr_count( $usuario->getEmail(), ".");

      $arroba_qtd = substr_count($usuario->getSenha(), "@");
      $exclama_qtd = substr_count($usuario->getSenha(), "!");
      $hasht_qtd = substr_count($usuario->getSenha(), "#");
      $dolar_qtd = substr_count($usuario->getSenha(), "$");

      if(!preg_match("/^[a-zA-Z  ]+$/", $nome) || $name_spaces > 4 || strlen($nome) < 6 ){

         return "Erro: O nome informado está incorreto.\n";

      } else if(strlen($usuario->getCPF()) != 11 || !ctype_digit($usuario->getCPF())){

         return "Erro: O cpf informado está incorreto.\n";

      } else if(strlen($usuario->getRG()) != 11 || !ctype_digit($usuario->getRG())){

         return "Erro: O RG informado está incorreto.\n";

      } else if(strlen($usuario->getCartao()) != 11 || !ctype_digit($usuario->getCartao())){

         return "Erro: O cartão informado está incorreto :::.\n";

      } else if(!preg_match("/^[a-zA-Z0-9.]+$/", $usuario->getEmail()) || $email_numbers > 4 || 
         $email_dots > 1 || strlen($usuario->getEmail()) < 7 || $_POST['provedor'] == "@Provedor" ){

         return "Erro: O email informado está incorreto.\n";

      } else if(!preg_match("/^[a-zA-Z0-9@$#!]+$/", $usuario->getSenha())  || strlen($usuario->getSenha()) < 5 ||
         $arroba_qtd > 1 || $exclama_qtd > 1 || $hasht_qtd > 1 || $dolar_qtd > 1){

         return "Erro: A senha informada não está no padrão correto.\n";

      } else if(strlen($usuario->getCelular()) != 11 || !ctype_digit($usuario->getCelular())){

         return "Erro: O celular informado está incorreto.\n";

      } else if(strlen($usuario->getTelefone()) != 10 || !ctype_digit($usuario->getTelefone())){

         return "Erro: O telefone informado está incorreto.\n";

      } else {

         return "ok";

      }

   }

   public static function getUsuarioForm(){

      $usuario = new Usuario(

         $_POST['cpf'], $_POST['email'], $_POST['nome'],
         $_POST['rg'], $_POST['celular'], $_POST['telefone'], $_POST['senha'], 
         $_POST['cartao'],$_POST['provedor']

      );

      $usuario->setProvedor($_POST['provedor']);

      return $usuario;

  }

 }

?>