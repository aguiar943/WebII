<?php

include_once('VeiculosDao.php');
include_once('PostgresDao.php');

class PostgresVeiculoDao extends PostgresDao implements VeiculosDao {

    private $table_name = 'carro';
    
    public function insere($veiculo) {

        $query = "INSERT INTO " . $this->table_name . 
        " (marca, nome, motor, ano, cor) VALUES" .
        " (:marca, :nome, :motor, :ano, :cor)";

        $stmt = $this->conn->prepare($query);

        // bind values 
        $stmt->bindValue(":motor", $veiculo->getMotor());
        $stmt->bindValue(":cor", $veiculo->getCor());
        $stmt->bindValue(":ano", $veiculo->getAno());
        $stmt->bindValue(":marca", $veiculo->getMarca());
        $stmt->bindValue(":nome", $veiculo->getNome());

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function remove($veiculo) {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(':id', $veiculo->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function altera($veiculo) {

        $query = "UPDATE " . $this->table_name . 
        " SET marca = :marca, motor = :motor, cor = :cor, ano = :ano, nome = :nome" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindValue(":marca", $veiculo->getMarca());
        $stmt->bindValue(":motor", $veiculo->getMotor());
        $stmt->bindValue(":nome", $veiculo->getNome());
        $stmt->bindValue(":cor", $veiculo->getCor());
        $stmt->bindValue(":ano", $veiculo->getAno());
        $stmt->bindValue(':id', $veiculo->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function buscaPorId($id) {
        
        $veiculo = null;

        $query = "SELECT
                    id, marca, nome, motor, ano, cor
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $veiculo = new Veiculo($row['id'],$row['marca'], $row['nome'], $row['motor'], $row['ano'], $row['cor']);
        } 
     
        return $veiculo;
    }

    public function buscaPorNome($nome) {

        $veiculo = null;

        $query = "SELECT
                    id, marca, nome, motor, ano, cor
                FROM
                    " . $this->table_name . "
                WHERE
                    nome = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $nome);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $veiculo = new Veiculo($row['id'],$row['marca'], $row['nome'], $row['motor'], $row['ano'], $row['cor']);
        } 
     
        return $veiculo;
    }

    public function buscaTodos() {

        $query = "SELECT
                    id, marca, nome, motor, ano, cor
                FROM
                    " . $this->table_name . 
                    " ORDER BY id ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
}
?>