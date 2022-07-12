<?php

    class PostgresCompraDao extends PostgresDAO implements ComprasDao{


        public function insere($compra)
        {
            
            if(isset($_POST['enviar'])){

                $produto = $compra->getProduto();

                $query_compra = "INSERT INTO " . $this->table_name . 
                " (forma_pgto, qtd, data, id_produto, id_usuario) VALUES" .
                " (:forma_pgto, :qtd, :data, :id_produto, :id_usuario)";

                $stmt = $this->conn->prepare($query_compra);

                $stmt->bindValue(":qtd", $compra->getQTD());
                $stmt->bindValue(":data", $compra->getData());
                $stmt->bindValue(":id_produto", $produto->getId());
                $stmt->bindValue(":id_usuario", $produto->getId());

                try{

                    $stmt->execute();

                }catch(PDOException $e){

                    return "Não foi possível salvar a compra. Erro: " . $e->getMessage();

                }


            }

        }

    }

?>