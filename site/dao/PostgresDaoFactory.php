<?php

include_once('DaoFactory.php');
include_once('PostgresUsuarioDao.php');

class PostgresDaofactory extends DaoFactory {

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "compreai";
    private $port = "5432";
    private $username = "postgres";
    private $password = "masterkey";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            // $this->conn = new PDO("pgsql:host=localhost;port=5432;dbname=PHP_tutorial", $this->username, $this->password);
    
      }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function getUsuarioDao() {

        return new PostgresUsuarioDao($this->getConnection());

    }
}
?>