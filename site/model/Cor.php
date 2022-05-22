<?php

class Cor {
    
    private $id;
    private $nome;
    private $hex;
    private $id_rel_produto;
    
    public function __construct( $id, $nome, $hex)
    {
        $this->id=$id;
        $this->nome=$nome;
        $this->hex=$hex;
    }

    public function getId() { return $this->id; }
    public function setId($id) {$this->id = $id;}

    public function getHex() { return $this->hex; }
    public function setHex($hex) {$this->hex = $hex;}

    public function getNome() { return $this->nome; }
    public function setNome($nome) {$this->nome = $nome;}
    
    public function getIdRelProduto(){
        
        return $this->id_rel_produto;
    }

    public function setIdRelProduto($id_rel_produto){

        $this->id_rel_produto = $id_rel_produto;

    }

}
?>
