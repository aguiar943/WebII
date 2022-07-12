<?php

    class FornecedoresForm{

        public static function getCompraForm($produto){

            $forma_pgto = "";

            if($_POST['flexRadioDefaul'] == "parcelado"){

                $forma_pgto = "parcelado " . $_POST['forma_pgto'];

            }

            //$compra = new Compra($produto, $_POST['qtd'],)

        }
        
    }

 ?>