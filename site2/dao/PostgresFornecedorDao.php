<?php

include_once('PostgresDao.php');
include_once('FornecedorDao.php');
include_once('validacoes/FornecedoresForm.php');

class PostgresFornecedorDao extends PostgresDao implements FornecedorDao {

    private $table_name = 'ca_fornecedor';

    public function insere($fornecedor) {

        if(isset($_POST['enviar'])){

            $fornecedor = FornecedoresForm::getProdutoForm();

            $query = "INSERT INTO " . $this->table_name . 
            " (fo_social, fo_fantasia, fo_cnpj, fo_ie, fo_telefone, fo_email, fo_provedor) VALUES" .
            " (?, ?, ?, ?, ?, ?, ?)";

            $stmt = $this->conn->prepare($query);

            $values = array(

                $fornecedor->getSocial(), 
                $fornecedor->getFantasia(),
                $fornecedor->getCNPJ(),
                $fornecedor->getIE(),
                $fornecedor->getTelefone(),
                $fornecedor->getEmail(),
                $fornecedor->getProvedor()

            ); 

            $msg = FornecedoresForm::validar($fornecedor,  $fornecedor, $this->buscaPorCNPJ($fornecedor->getCNPJ()));

            if($msg == "ok"  && $stmt->execute($values)){

                return "Fornecedor cadastrado com sucesso";

            }else{

                return FornecedoresForm::validar($fornecedor, $fornecedor, $this->buscaPorCNPJ($fornecedor->getCNPJ()));

            }

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

    public function altera($fornecedor) {

        $msg = "";
        $cnpj = $fornecedor->getCNPJ();

        $antigo_fornecedor = $fornecedor;
        $fornecedor = FornecedoresForm::getProdutoForm();

        $query = "UPDATE " . $this->table_name . 
        " SET fo_social = :fo_social, fo_fantasia = :fo_fantasia, fo_cnpj = :fo_cnpj," .
        " fo_ie = :fo_ie, fo_telefone = :fo_telefone, fo_email = :fo_email, fo_provedor = :fo_provedor" .
        " WHERE fo_cnpj = :fo_cnpj2";

        $stmt = $this->conn->prepare($query);

        if(FornecedoresForm::validar($fornecedor, $antigo_fornecedor, $this->buscaPorCNPJ($fornecedor->getCNPJ())) == "ok"){

            $stmt->bindValue(":fo_social", $fornecedor->getSocial() );
            $stmt->bindValue(":fo_fantasia", $fornecedor->getFantasia() );
            $stmt->bindValue(":fo_cnpj", $fornecedor->getCNPJ() );
            $stmt->bindValue(":fo_ie", $fornecedor->getIE() );
            $stmt->bindValue(":fo_telefone", $fornecedor->getTelefone() );
            $stmt->bindValue(':fo_email', $fornecedor->getEmail() );
            $stmt->bindValue(':fo_provedor', $fornecedor->getProvedor()  );
            $stmt->bindValue(':fo_cnpj2', $cnpj );

            try{

                $stmt->execute();
                $msg = "Fornecedor alterado com sucesso !";

            } catch(PDOException $ex) {

                $msg = "Ocorreu um erro ao tentar alterar o fornecedor ! Exceção: " . $ex->getMessage();

            }

        } else {

            $msg = FornecedoresForm::validar($fornecedor, $antigo_fornecedor, $this->buscaPorCNPJ($fornecedor->getCNPJ()));

        }

        return $msg;

    }

    public function buscaPorCNPJ($cnpj) {

        $fornecedor = null;

        $query = 
        "SELECT fo_social, fo_fantasia, fo_cnpj, fo_ie, fo_telefone, fo_email, fo_provedor 
            FROM " . $this->table_name . " " .
        "WHERE fo_cnpj = ?";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(1, $cnpj);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {

            $fornecedor = new Fornecedor(

                $row['fo_social'], $row['fo_fantasia'],
                $row['fo_cnpj'], $row['fo_ie'],
                $row['fo_telefone'], $row['fo_email']

            );
            $fornecedor->setProvedor($row['fo_provedor']);

        } 
     
        return $fornecedor;
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

        $query=
        "SELECT id, fo_social, fo_fantasia, fo_cnpj, fo_ie, fo_telefone, fo_email
            FROM " . $this->table_name . "
        ORDER BY fo_social ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
}
?>