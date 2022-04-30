<?php
class Usuario {
    
    private $us_cpf;     
    private $us_email;   
    private $us_nome;  
    private $us_rg; 
    private $us_celular;
    private $us_telefone;   
    private $us_senha;
    private $us_cartao;

    public function __construct($us_cpf, $us_email, $us_nome, $us_rg, $us_celular, $us_telefone,$us_senha, $us_cartao)
    {        
        $this->us_cpf=$us_cpf;     
        $this->us_email=$us_email;   
        $this->us_nome=$us_nome;     
        $this->us_rg=$us_rg;
        $this->us_celular=$us_celular; 
        $this->us_telefone=$us_telefone; 
        $this->us_senha=$us_senha;    
        $this->us_cartao=$us_cartao;    

    }

    public function getCPF() { return $this->us_cpf; }
    public function setCPF($us_cpf) {$this->us_cpf = $us_cpf;}

    public function getEmail() { return $this->us_email; }
    public function setEmail($us_email) {$this->us_email = $us_email;}

    public function getNome() { return $this->us_nome; }
    public function setNome($us_nome) {$this->us_nome = $us_nome;}

    public function getRG() { return $this->us_rg; }
    public function setRG($us_rg) {$this->us_rg = $us_rg;}

    public function getCelular() { return $this->us_celular; }
    public function setCelular($us_celular) {$this->us_celular = $us_celular;}

    public function getTelefone() { return $this->us_telefone; }
    public function setTelefone($us_telefone) {$this->us_telefone = $us_telefone;}

    public function getSenha() { return $this->us_senha; }
    public function setSenha($us_senha) {$this->us_senha = $us_senha;}

    public function getCartao() { return $this->us_cartao; }
    public function setCartao($us_cartao) {$this->us_cartao = $us_cartao;}
}
?>