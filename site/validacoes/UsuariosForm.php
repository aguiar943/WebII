<?php

 class UsuariosForm{

   public static function validar(){

      if(strlen($_POST['nome']) < 4){

         return "Erro: O nome informado está incorreto.\n";

      } else if(strlen($_POST['cpf']) != 11 || !ctype_digit($_POST['cpf'])){

         return "Erro: O cpf informado está incorreto.\n";

      } else if(strlen($_POST['rg']) != 11 || !ctype_digit($_POST['rg'])){

         return "Erro: O RG informado está incorreto.\n";

      } else if(strlen($_POST['cartao']) != 11 || !ctype_digit($_POST['cartao'])){

         return "Erro: O cartão informado está incorreto :::.\n";

      } else if(strlen($_POST['email']) < 5 || str_contains($_POST['email'], "@") || 
         (isset($_POST['provedor']) && $_POST['provedor'] == "@Provedor")){

         return "Erro: O email informado está incorreto.\n";

      } else if(strlen($_POST['senha']) < 5){

         return "Erro: A senha informada está incorreto.\n";

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