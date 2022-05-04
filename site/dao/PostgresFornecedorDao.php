<?php

include_once('FornecedorDao.php');
include_once('PostgresDao.php');


class PostgresFornecedorDao extends PostgresDao implements FornecedorDao {

    private $table_name = 'ca_fornecedor';
    
    public function insere($fornecedor) {

        $query = "INSERT INTO " . $this->table_name . 
        " (fo_social, fo_fantasia, fo_cnpj, fo_ie, fo_telefone, fo_email) VALUES" .
        " (:fo_social, :fo_fantasia, :fo_cnpj, :fo_ie, :fo_telefone, :fo_email) ";
    
        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(":fo_social", $fornecedor->getSocial());
        $stmt->bindValue(":fo_fantasia", $fornecedor->getFantasia());
        $stmt->bindValue(":fo_cnpj", $fornecedor->getCNPJ());
        $stmt->bindValue(":fo_ie", $fornecedor->getIE());
        $stmt->bindValue(":fo_telefone", $fornecedor->getTelefone());
        $stmt->bindValue(":fo_email", $fornecedor->getEmail());
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function RemoveFornecedorPorCNPJ($fo_cnpj) {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE fo_cnpj = :fo_cnpj";

        $stmt = $this->conn->prepare($query);
        // bind parameters
        $stmt->bindParam(':fo_cnpj', $fo_cnpj);

        // execute the query
        if($stmt->execute()){
            return true;
        }    
        return false;
    }
   
    public function buscaTodosFornecedores() {
        $fornecedores = array();
        $query = "SELECT
                      fo_social, fo_fantasia, fo_cnpj, fo_ie, fo_telefone, fo_email
                FROM
                    " . $this->table_name . 
                    " ORDER BY fo_idl ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $fornecedores[] = new Fornecedor($fo_social, $fo_fantasia, $fo_cnpj, $fo_ie, $fo_telefone, $fo_email);
        } 
        return $fornecedores;
      
    }
}
?>