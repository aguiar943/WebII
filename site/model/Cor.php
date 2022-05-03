<?php

class Cor {
    
    private $id;
    private $nome;
    private $hex;
    
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

}
?>