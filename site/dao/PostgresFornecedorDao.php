<?php

include_once('FornecedorDao.php');
include_once('PostgresDao.php');

class PostgresFornecedorDao extends PostgresDao implements FornecedoresDao {

    private $table_name = 'ca_fornecedor';
    
    public function insere($fornecedor) {

        // $query = "INSERT INTO " . $this->table_name . 
        // " (fo_social, fo_fantasia, fo_cnpj, fo_ie, fo_telefone, fo_email) VALUES" .
        // " (:fo_social, :fo_fantasia, :fo_cnpj, :fo_ie, :fo_telefone, :fo_email) ";
        try{
            $query = "INSERT INTO " . $this->table_name . 
            " (fo_social) VALUES" .
            " (:fo_social) ";
    
    
      }catch(PDOException $exception){
            echo $exception->getMessage();
        }      

        $stmt = $this->conn->prepare($query);

        // bind values 
        $stmt->bindValue(":fo_social", $fornecedor->getSocial());
        // $stmt->bindValue(":fo_fantasia", $usuario->getFantasia());
        // $stmt->bindValue(":fo_cnpj", $usuario->getCNPJ());
        // $stmt->bindValue(":fo_ie", $usuario->getIE());
        // $stmt->bindValue(":fo_telefone", $usuario->getTelefone());
        // $stmt->bindValue(":fo_email", $usuario->getEmail());
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function removePorId($id) {
        // $query = "DELETE FROM " . $this->table_name . 
        // " WHERE id = :id";

        // $stmt = $this->conn->prepare($query);

        // // bind parameters
        // $stmt->bindParam(':id', $id);

        // // execute the query
        // if($stmt->execute()){
        //     return true;
        // }    

        // return false;
    }
    public function remove($usuario) {
        // return removePorId($usuario->getId());
    }

    public function altera(&$usuario) {

        $query = "UPDATE " . $this->table_name . 
        " SET US_EMAIL = :US_EMAIL, US_NOME = :US_NOME, US_RG = :US_RG, US_CELULAR = :US_CELULAR, US_TELEFONE = :US_TELEFONE, US_SENHA =:US_SENHA, US_CARTAO =:US_CARTAO" .
        " WHERE US_CPF = :US_CPF";
        
        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindValue(":US_CPF", $usuario->getCPF());
        $stmt->bindValue(":US_EMAIL", $usuario->getEmail());
        $stmt->bindValue(":US_NOME", $usuario->getNome());
        $stmt->bindValue(":US_RG", $usuario->getRG());
        $stmt->bindValue(":US_CELULAR", $usuario->getCelular());
        $stmt->bindValue(":US_TELEFONE", $usuario->getTelefone());
        $stmt->bindValue(":US_SENHA", md5($usuario->getSenha()));
        $stmt->bindValue(":US_CARTAO", $usuario->getCartao());
        // execute the query
        if($stmt->execute()){
            return true;
        }    
        return false;
    }

    public function buscaPorId($id) {
        
        // $usuario = null;

        // $query = "SELECT
        //             US_CPF, US_NOME, US_SENHA
        //         FROM
        //             " . $this->table_name . "
        //         WHERE
        //             US_CPF = ?
        //         LIMIT
        //             1 OFFSET 0";
     
        // $stmt = $this->conn->prepare( $query );
        // $stmt->bindValue(1, $id);
        // $stmt->execute();
     
        // $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // if($row) {
        //     // $usuario = new Usuario($row['US_CPF'], $row['US_SENHA'], $row['US_NOME']);
        // } 
     
        // return $usuario;
    }

    public function buscaPorLogin($login) {

        // $usuario = null;

        // $query = "SELECT
        //             login, nome, senha
        //         FROM
        //             " . $this->table_name . "
        //         WHERE
        //             login = ?
        //         LIMIT
        //             1 OFFSET 0";
     
        // $stmt = $this->conn->prepare( $query );
        // $stmt->bindValue(1, $login);
        // $stmt->execute();
     
        // $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // if($row) {
        //     // $usuario = new Usuario($row['id'],$row['login'], $row['senha'], $row['nome']);
        // } 
     
        // return $usuario;
    }

    public function buscaPorCPF($login) {

        // $usuario = null;

        // $query = "SELECT
        //             us_cpf, us_email, us_nome, us_rg, us_celular, us_telefone, us_senha, us_cartao
        //         FROM
        //             " . $this->table_name . "
        //         WHERE
        //             us_cpf = ?
        //         LIMIT
        //             1 OFFSET 0";
     
        // $stmt = $this->conn->prepare( $query );
        // $stmt->bindValue(1, $login);
        // $stmt->execute();
     
        // $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // if($row) {
        //     $usuario = new Usuario($row['us_cpf'],$row['us_email'], $row['us_nome'], $row['us_rg'], $row['us_celular'], $row['us_telefone'], $row['us_senha'], $row['us_cartao']);
        // } 
     
        // return $usuario;
    }

    /*
    public function buscaTodos() {

        $query = "SELECT
                    id, login, senha, nome
                FROM
                    " . $this->table_name . 
                    " ORDER BY id ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
    */

    public function buscaTodos() {

        // $usuarios = array();

        // $query = "SELECT
        //             id, login, senha, nome
        //         FROM
        //             " . $this->table_name . 
        //             " ORDER BY id ASC";
     
        // $stmt = $this->conn->prepare( $query );
        // $stmt->execute();

        // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //     extract($row);
        //     $usuarios[] = new Usuario($id,$login,$senha,$nome);
        // }
        
        // return $usuarios;
    }
}
?>