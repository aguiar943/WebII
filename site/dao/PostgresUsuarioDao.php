<?php

include_once('UsuarioDao.php');
include_once('PostgresDao.php');
include_once('validacoes/UsuariosForm.php');

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
        $stmt->bindValue(":us_senha", md5($usuario->getSenha()));
        $stmt->bindValue(":us_cartao", $usuario->getCartao());
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }


    public function altera(&$usuario) {

        $query = 'UPDATE ' . $this->table_name . 
        ' SET us_email =:us_email, us_nome =:us_nome, us_rg =:us_rg,  us_celular =:us_celular,us_telefone =:us_telefone, ' .
        ' us_senha =:us_senha, us_cartao =:us_cartao' .   
        ' WHERE us_cpf = :us_cpf';

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindValue(":us_cpf", $usuario->getCPF());
        $stmt->bindValue(":us_email", $usuario->getEmail());
        $stmt->bindValue(":us_nome", $usuario->getNome());
        $stmt->bindValue(":us_rg", $usuario->getRG());
        $stmt->bindValue(":us_celular", $usuario->getCelular());
        $stmt->bindValue(":us_telefone", $usuario->getTelefone());
        $stmt->bindValue(":us_senha", md5($usuario->getSenha()));
        $stmt->bindValue(":us_cartao", $usuario->getCartao());

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function removePorCPF($us_cpf) {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE us_cpf = :us_cpf";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(':us_cpf', $us_cpf);

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function buscaPorCPF($login) {

        $usuario = null;

        $query = "SELECT
                    us_cpf, us_email, us_nome, us_rg, us_celular, us_telefone, us_senha, us_cartao
                FROM
                    " . $this->table_name . "
                WHERE
                    us_cpf = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(1, $login);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $usuario = new Usuario($row['us_cpf'],$row['us_email'], $row['us_nome'], $row['us_rg'], $row['us_celular'], $row['us_telefone'], $row['us_senha'], $row['us_cartao']);
        } 
     
        return $usuario;
    }

    public function buscaTodos() {    
      
        $usuarios = array();

        $query = "SELECT
                      us_cpf, us_email, us_nome, us_rg, us_celular, us_telefone, us_senha, us_cartao
                FROM
                    " . $this->table_name . 
                    " ORDER BY us_idl ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $usuarios[] = new Usuario($us_cpf, $us_email, $us_nome, $us_rg, $us_celular, $us_telefone,$us_senha, $us_cartao);
        } 
        return $usuarios;
      
    }

    public function buscaTodosNovo() {    
      
        $usuarios = array();

        $query = "SELECT
                      us_cpf, us_email, us_nome, us_rg, us_celular, us_telefone, us_senha, us_cartao
                FROM
                    " . $this->table_name . 
                    " ORDER BY us_idl ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt;
      
    }


    public function PesquisaUsuario($palavra) {
        
        $usuarios = array();        
        try{
           $query = "SELECT
                       us_cpf, us_email, us_nome, us_rg, us_celular, us_telefone, us_senha, us_cartao
                   FROM
                       " . $this->table_name . "
                   WHERE
                   us_cpf like ?  or us_nome like ? ORDER BY us_idl ASC";
        
           $stmt = $this->conn->prepare($query);
           $parametro = "%" . $palavra . "%";
           $stmt->bindParam(1, $parametro);
           
           

            $stmt->execute();

            } catch(Exception $ex){

                echo $ex->getMessage();

            }

           
           
           $stmt->execute();
        
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
               extract($row);
               $usuarios[] = new Usuario($us_cpf, $us_email, $us_nome, $us_rg, $us_celular, $us_telefone,$us_senha, $us_cartao);
           }
       
           return $usuarios;
       }
}
?>