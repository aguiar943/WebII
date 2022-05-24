<?php

 class UsuariosForm{

   public static function validar(){

      $nome = ltrim($_POST['nome'], " ");

      $name_spaces = substr_count($nome, " ");


      $email_numbers = preg_match_all( "/[0-9]/", $_POST['email'] );

      $email_dots = substr_count( $_POST['email'], ".");


      $arroba_qtd = substr_count($_POST['senha'], "@");
      $exclama_qtd = substr_count($_POST['senha'], "!");
      $hasht_qtd = substr_count($_POST['senha'], "#");
      $dolar_qtd = substr_count($_POST['senha'], "$");


      if(!preg_match("/^[a-zA-Z  ]+$/", $nome) || $name_spaces > 4 || strlen($nome) < 6 ){

         return "Erro: O nome informado está incorreto.\n";

      } else if(strlen($_POST['cpf']) != 11 || !ctype_digit($_POST['cpf'])){

         return "Erro: O cpf informado está incorreto.\n";

      } else if(strlen($_POST['rg']) != 11 || !ctype_digit($_POST['rg'])){

         return "Erro: O RG informado está incorreto.\n";

      } else if(strlen($_POST['cartao']) != 11 || !ctype_digit($_POST['cartao'])){

         return "Erro: O cartão informado está incorreto :::.\n";

      } else if(!preg_match("/^[a-zA-Z0-9.]+$/", $_POST['email']) || $email_numbers > 4 || 
         $email_dots > 1 || strlen($_POST['email']) < 7 || $_POST['provedor'] == "@Provedor" ){

         return "Erro: O email informado está incorreto.\n";

      } else if(!preg_match("/^[a-zA-Z0-9@$#!]+$/", $nome)  || strlen($_POST['senha']) < 5 ||
         $arroba_qtd > 1 || $exclama_qtd > 1 || $hasht_qtd > 1 || $dolar_qtd > 1){

         return "Erro: A senha informada não está no padrão correto.\n";

      } else if(strlen($_POST['celular']) != 11 || !ctype_digit($_POST['celular'])){

         return "Erro: O celular informado está incorreto.\n";

      } else if(strlen($_POST['telefone']) != 10 || !ctype_digit($_POST['telefone'])){

         return "Erro: O telefone informado está incorreto.\n";

      } else {

         return "ok";

      }

   }

 }

?>