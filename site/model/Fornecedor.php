<?php

class Fornecedor {
    private $fo_social;     
    private $fo_fantasia;   
    private $fo_cnpj;  
    private $fo_ie; 
    private $fo_telefone;
    private $fo_email;   

    public function __construct($fo_social, $fo_fantasia, $fo_cnpj, $fo_ie, $fo_telefone, $fo_email)
    {        
        $this->fo_social=$fo_social;     
        $this->fo_fantasia=$fo_fantasia;   
        $this->fo_cnpj=$fo_cnpj;     
        $this->fo_ie=$fo_ie;
        $this->fo_telefone=$fo_telefone; 
        $this->fo_email=$fo_email; 
    }

    public function getSocial() { return $this->fo_social; }
    public function setSocial($fo_social) {$this->fo_social = $fo_social;}

    public function getFantasia() { return $this->fo_fantasia; }
    public function setFantasia($fo_fantasia) {$this->fo_fantasia = $fo_fantasia;}

    public function getCNPJ() { return $this->fo_cnpj; }
    public function setCNPJ($fo_cnpj) {$this->fo_cnpj = $fo_cnpj;}

   

    public function getIE() { return $this->fo_ie; }
    public function setIE($fo_ie) {$this->fo_ie = $fo_ie;}

    public function getEmail() { return $this->fo_telefone; }
    public function setEmail($fo_telefone) {$this->fo_telefone = $fo_telefone;}

    public function getTelefone() { return $this->fo_email; }
    public function setTelefone($fo_email) {$this->fo_email = $fo_email;}
}
?>