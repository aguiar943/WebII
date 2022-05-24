<?php

    class ProdutosForm{

        public static function validar($produto, $qtd_fotos, $qtd_fotos_detalhes){

            $modelo = trim($produto->getModelo());

            $modelo_spaces = substr_count($modelo, " ");

            # Campo modelo pode ser composto por letras, números, no máximo 3 espaços e deve ter 4 caracteres no mínimo

            if(!preg_match("/^[a-zA-Z0-9  ]+$/", $modelo) || $modelo_spaces > 4 || strlen($modelo) < 4){

                return "Erro: O modelo informado está incorreto !\n";
    
            } else if(strlen($produto->getCdBarras()) != 13){

                return "Erro: O código de barras é composto por 13 números !\n" ;

            } else if(strlen($produto->getCdReferencia()) != 13){

                return "Erro: O código de referência é composto por 13 números !\n" ;

            } else if(strlen($produto->getNcm()) != 8 || !ctype_digit($produto->getNcm())){

                return "Erro: O código NCM é composto por 8 números !\n" ;

            } else if($produto->getPrecoCusto() == 0 || strlen($produto->getPrecoCusto()) > 5){

                return "Erro: O preço mínimo de custo é R$ 1,00 e o preço máximo não pode ser excedido !\n" ;

            } else if($produto->getPrecoVenda() == 0 || strlen($produto->getPrecoVenda()) > 5){

                return "Erro: O preço mínimo de venda é R$ 1,00 e o preço máximo não pode ser excedido !\n" ;

            } else if($produto->getCores() == null){

                return "Erro: Pelo menos uma cor deve ser selecionada !\n" ;

            } else if($produto->getUnidade() == "Unidade"){

                return "Erro: A unidade deve ser selecionada !\n" ;

            } else if($produto->getSubcategoria() == null ){

                return "Erro: A subcategoria deve ser selecionada !\n" ;

            } else if($produto->getMarca() == null){

                return "Erro: A marca deve ser selecionada !\n" ;

            } else if($qtd_fotos == 0 || $qtd_fotos_detalhes == 0){

                return "Erro: Pelo menos uma foto do produto e uma foto de detalhe devem ser escolhidas !\n" ;

            } else {

                return "ok";

            }

        }

        public static function getProdutoForm($factory){

            $daoSubcategoria = $factory->getSubcategoriaDao();
            $daoMarca = $factory->getMarcaDao();

            $produto = new Produto(

                $_POST['descricao'], $_POST['modelo'],
                $_POST['preco_custo'], $_POST['preco_venda'],
                $_POST['cd_barras'], $_POST['cd_referencia'],
                $_POST['unidade'], $_POST['ncm']

            );

            $subcategoria = $daoSubcategoria->buscaPorId(
                
                intval($_POST['subcategoria'])

            );

            $marca = $daoMarca->buscaPorId(
                
                intval($_POST['marca'])
            
            );

            $produto->setCores($_POST['cor']);
            $produto->setSubcategoria($subcategoria);
            $produto->setMarca($marca);

            return $produto;

        }

    }


?>