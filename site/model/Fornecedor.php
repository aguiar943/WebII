<?php
class Fornecedor {
    private $us_social;     

    public function __construct($us_social)
    {        
        $this->us_social=$us_social;     

    }

    public function getSocial() { return $this->us_social; }
    public function setSocial($us_social) {$this->us_social = $us_social;}



    
    // private $us_social;     
    // private $us_fantasia;   
    // private $us_cnpj;  
    // private $us_ie; 
    // private $us_telefone;
    // private $us_email;   

    // public function __construct($us_social, $us_fantasia, $us_cnpj, $us_ie, $us_telefone, $us_email)
    // {        
    //     $this->us_social=$us_social;     
    //     $this->us_fantasia=$us_fantasia;   
    //     $this->us_cnpj=$us_cnpj;     
    //     $this->us_ie=$us_ie;
    //     $this->us_telefone=$us_telefone; 
    //     $this->us_email=$us_email; 
    // }

    // public function getSocial() { return $this->us_social; }
    // public function setSocial($us_social) {$this->us_social = $us_social;}

    // public function getCNPJ() { return $this->us_cnpj; }
    // public function setCNPJ($us_cnpj) {$this->us_cnpj = $us_cnpj;}

    // public function getFantasia() { return $this->us_fantasia; }
    // public function setFantasia($us_fantasia) {$this->us_fantasia = $us_fantasia;}

    // public function getIE() { return $this->us_ie; }
    // public function setIE($us_ie) {$this->us_ie = $us_ie;}

    // public function getEmail() { return $this->us_email; }
    // public function setEmail($us_email) {$this->us_email = $us_email;}

    // public function getTelefone() { return $this->us_telefone; }
    // public function setTelefone($us_telefone) {$this->us_telefone = $us_telefone;}
}
?>