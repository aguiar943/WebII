<?php
class Veiculo {
    
    private $id;
    private $cor;
    private $marca;
    private $nome;
    private $motor;
    private $ano;
    
    /*
    public function __construct() { }
    
    public function __construct($login, $senha, $nome)
    {
        $this->login=$login;
        $this->senha=$senha;
        $this->nome=$nome;
    }
    */
    public function __construct( $id, $marca, $nome,  $motor, $ano, $cor)
    {
        $this->id=$id;
        $this->cor=$cor;
        $this->marca=$marca;
        $this->nome=$nome;
        $this->motor=$motor;
        $this->ano=$ano;
    }

    public function getId() { return $this->id; }
    public function setId($id) {$this->id = $id;}

    public function getCor() { return $this->cor; }
    public function setCor($cor) {$this->cor = $cor;}

    public function getNome() { return $this->nome; }
    public function setNome($nome) {$this->nome = $nome;}

    public function getMarca() { return $this->marca; }
    public function setMarca($marca) {$this->marca = $marca;}

    public function getMotor() { return $this->motor; }
    public function setMotor($motor) {$this->motor = $motor;}

    public function getAno() { return $this->ano; }
    public function setAno($ano) {$this->ano = $ano;}

}
?>