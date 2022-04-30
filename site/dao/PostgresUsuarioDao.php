<?php

include_once('UsuarioDao.php');
include_once('PostgresDao.php');

class PostgresUsuarioDao extends PostgresDao implements UsuarioDao {

    private $table_name = 'ca_usuario';
    
    public function insere($usuario) {

        $query = "INSERT INTO " . $this->table_name . 
        " (us_cpf, us_email, us_nome, us_rg, us_celular, us_telefone, us_senha, us_cartao) VALUES" .
        " (:us_cpf, :us_email, :us_nome, :us_rg, :us_celular, :us_telefone, :us_senha, :us_cartao) ";

        $stmt = $this->conn->prepare($query);

        // bind values 
        $stmt->bindValue(":us_cpf", $usuario->getCPF());
        $stmt->bindValue(":us_email", $usuario->getEmail());
        $stmt->bindValue(":us_nome", $usuario->getNome());
        $stmt->bindValue(":us_rg", $usuario->getRG());
        $stmt->bindValue(":us_celular", $usuario->getCelular());
        $stmt->bindValue(":us_telefone", $usuario->getTelefone());
        $stmt->bindValue(":us_senha", md5($usuario->getCPF().$usuario->getSenha()));
        $stmt->bindValue(":us_cartao", $usuario->getCartao());
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function removePorId($id) {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(':id', $id);

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function remove($usuario) {
        return removePorId($usuario->getId());
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
        
        $usuario = null;

        $query = "SELECT
                    US_CPF, US_NOME, US_SENHA
                FROM
                    " . $this->table_name . "
                WHERE
                    US_CPF = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(1, $id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $usuario = new Usuario($row['US_CPF'], $row['US_SENHA'], $row['US_NOME']);
        } 
     
        return $usuario;
    }

    public function buscaPorLogin($login) {

        $usuario = null;

        $query = "SELECT
                    id, login, nome, senha
                FROM
                    " . $this->table_name . "
                WHERE
                    login = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(1, $login);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $usuario = new Usuario($row['id'],$row['login'], $row['senha'], $row['nome']);
        } 
     
        return $usuario;
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

        $usuarios = array();

        $query = "SELECT
                    id, login, senha, nome
                FROM
                    " . $this->table_name . 
                    " ORDER BY id ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $usuarios[] = new Usuario($id,$login,$senha,$nome);
        }
        
        return $usuarios;
    }
}
?>