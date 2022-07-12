<?php

include_once('SubcategoriasDao.php');
include_once('PostgresDao.php');

class PostgresSubcategoriaDao extends PostgresDao implements SubCategoriasDao {

    private $table_name = 'CA_SUBCATEGORIAS';

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
        
        $subcategoria = null;
    
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

            $subcategoria = new Subcategoria($row['id'], $row['nome']);

        } 
     
        return $subcategoria;
    }

    

}



?>