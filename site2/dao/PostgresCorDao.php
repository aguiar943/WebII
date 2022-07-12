<?php

include_once('CoresDao.php');
include_once('PostgresDao.php');

class PostgresCorDao extends PostgresDao implements CoresDao {

    private $table_name = 'CA_CORES';

    public function buscaTodos() {

        $query = 
            "SELECT
                id, nome, cd_hex
            FROM
                " . $this->table_name . 
        " ORDER BY nome ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }

    public function buscaPorId($id) {
        
        $cor = null;
    
        $query = "SELECT
                    id, nome, cd_hex
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(1, $id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {

            $cor = new Cor($row['id'], $row['nome'], $row['cd_hex']);

        } 
     
        return $cor;
    }

}

?>