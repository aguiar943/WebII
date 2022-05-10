<?php

include_once('DaoFactory.php');
include_once('PostgresUsuarioDao.php');
include_once('PostgresMarcaDao.php');
include_once('PostgresCorDao.php');
include_once('PostgresProdutoDao.php');
include_once('PostgresFornecedorDao.php');

class PostgresDaofactory extends DaoFactory {

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "compreai2";
    private $port = "5432";
    private $username = "postgres";
    private $password = "masterkey";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->conn = new PDO("pgsql:host=localhost;port=5432;dbname=PHP_tutorial", $this->username, $this->password);
    
      }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function getUsuarioDao() {

        return new PostgresUsuarioDao($this->getConnection());

    }
    
    public function getSubCategoriaDao() {

        /*
         *
         * PostgresSubcategoriaDao, herda o construtor de PostgresDao. Este construtor recebe uma
         * variável de conexão de banco.
         * 
         */

        return new PostgresSubcategoriaDao($this->getConnection());

    }

    public function getMarcaDao() {

        return new PostgresMarcaDao($this->getConnection());

    }

    public function getCorDao(){

        return new PostgresCorDao($this->getConnection());

    }

    public function getProdutoDao(){

        return new PostgresProdutoDao($this->getConnection());

    }

    public function getFornecedorDao() {

        return new PostgresFornecedorDao($this->getConnection());

    }
    
}
?>
