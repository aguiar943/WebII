<?php

include_once('MarcasDao.php');
include_once('PostgresDao.php');

class PostgresMarcaDao extends PostgresDao implements MarcasDao {

    private $table_name = 'CA_MARCAS';

    public function buscaTodos() {

        $query = "SELECT
                    id, nome
                FROM
                    " . $this->table_name . 
                    " ORDER BY nome ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }

    public function buscaPorId($id) {
        
        $marca = null;
    
        $query = "SELECT
                    id, nome
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

            $marca = new Marca($row['id'], $row['nome']);

        } 
     
        return $marca;
    }

    
}

?>