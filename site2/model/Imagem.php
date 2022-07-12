<?php

class Imagem{

    private $id;
    private $nome;
    private $categoria;

    public function __construct( $id, $nome, $categoria)
    {
        $this->id=$id;
        $this->nome=$nome;
        $this->categoria=$categoria;

    }

    public function getId(){

        return $this->id;

    }

    public function setId($id){

        $this->id = $id;

    }

    public function getNome(){

        return $this->nome;

    }

    public function setNome($nome){

        $this->nome = $nome;

    }

    public function getCategoria(){

        return $this->categoria;

    }

    public function setCategoria($categoria){

        $this->categoria = $categoria;

    }

    public function getPath($produto){

        $img = 'imagens/' . $produto->getSubcategoria() . '/' . $produto->getId();
        
        $img = $img . '/' . $this->categoria . '/' . $this->nome;

        return $img;

    }

}


?>