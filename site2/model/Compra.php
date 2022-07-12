<?php

    class Compra{

        private $produto;
        private $qtd;
        private $data;
        private $forma_pgto;

        public function __construct($produto, $qtd /*, $forma_pgto */ ){

            $this->produto = $produto;
            $this->qtd = $qtd;
            //$this->forma_pgto = $forma_pgto;

        }

        public function getProduto(){

            return $this->produto;

        }

        public function getQTD(){

            return $this->qtd;

        }

        public function getFormaPGTO(){

            return $this->forma_pgto;

        }

        public function getData(){

            return $this->data;

        }

        public function setData($data){

            $this->data = $data;

        }

        public function setProduto($produto){

            $this->produto = $produto;

        }

    }

?>