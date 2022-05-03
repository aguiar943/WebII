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

}

?>