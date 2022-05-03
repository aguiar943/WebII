<?php

include_once('VeiculosDao.php');
include_once('PostgresDao.php');
include_once('ProdutosDao.php');

class PostgresProdutoDao extends PostgresDao implements ProdutosDao {

    private $table_name = 'CA_PRODUTOS';

    public function insere($produto, $factory/* $daoSubcategoria,  $daoMarca */) {

        $msg = "";

        $qtd_fotos = 0;
        $qtd_fotos_detalhes = 0;

        $daoSubcategoria = $factory->getSubcategoriaDao();
        $daoMarca = $factory->getMarcaDao();

        if(isset($_POST['enviar']) && (isset($_FILES['img_produtos']) || isset($_FILES['img_detalhes']))){

            $subcategoria = $daoSubcategoria->buscaPorId(intval($_POST['subcategoria']));
            $marca = $daoMarca->buscaPorId(intval($_POST['marca']));

            $qtd_fotos = count($_FILES['img_produtos']['name']) ;
            $qtd_fotos_detalhes = count($_FILES['img_detalhes']['name']) ;

            if(strlen($_POST['cd_barras']) != 13  || strlen($_POST['ncm']) != 8 || strlen($_POST['cd_referencia']) != 13){

                $msg = $msg . "Erro: O código de barras é composto por 13 números e o NCM por 8 números" . $msg;
    
            } else if(strlen($_POST['modelo']) < 4){

                $msg = $msg . "Erro: O campo Modelo foi preenchido incorretamente" . $msg;

            } else if($_POST['preco_custo'] == 0 || $_POST['preco_venda'] == 0){

                $msg = $msg . "Erro: O preço mínimo é R$ 1,00" . $msg;
                
            }

        }

        if(isset($_POST['enviar']) && $msg == ""){

            $produto = new Produto(
                $_POST['descricao'], $_POST['modelo'], 
                intval($_POST['preco_custo']), intval($_POST['preco_venda']), 
                intval($_POST['cd_barras']), intval($_POST['cd_referencia']),
                $_POST['unidade'], intval($_POST['ncm'])
    
            );

            $query_produto = "INSERT INTO " . $this->table_name . 
            " (descricao, modelo, preco_custo, preco_venda, cd_barras, cd_referencia, unidade, ncm, id_marca, id_subcategoria) VALUES" .
            " (:descricao, :modelo, :preco_custo, :preco_venda, :cd_barras, :cd_referencia, :unidade, :ncm, :marca, :subcategoria)";

            $stmt = $this->conn->prepare($query_produto);

            $stmt->bindValue(":descricao", $produto->getDescricao());
            $stmt->bindValue(":modelo", $produto->getModelo());
            $stmt->bindValue(":preco_custo", $produto->getPrecoCusto());
            $stmt->bindValue(":preco_venda", $produto->getPrecoVenda());
            $stmt->bindValue(":cd_barras", $produto->getCdBarras());
            $stmt->bindValue(":cd_referencia", $produto->getCdReferencia());
            $stmt->bindValue(":unidade", $produto->getUnidade()) ;
            $stmt->bindValue(":ncm", $produto->getNcm());
            $stmt->bindValue(":marca", $marca->getId());
            $stmt->bindValue(":subcategoria", $subcategoria->getId());
            
            try{

                if($stmt->execute()){
				
                    $id = $this->conn->lastInsertId();

                    $this->inserirFotos(
                    
                        $qtd_fotos, "Vitrine", $id, 
                        $subcategoria->getNome(),
                        $_FILES['img_produtos']['name']
                    
                    );
                    
                    $this->inserirFotos(
                    
                        $qtd_fotos_detalhes, "Detalhes", $id, 
                        $subcategoria->getNome(),
                        $_FILES['img_detalhes']['name']
                    );

                    $msg = "Produto cadastrado com sucesso!";
				
                }

            }catch(Exception $ex){

                echo $ex->getMessage();

            }

        }

        return $msg;

    }

    public function inserirFotos($qtd_fotos, $categoria_foto, $id, $categoria, $fotos){
        $erro = "";

        if( $qtd_fotos > 0) {

            for($i = 0; $i < $qtd_fotos; $i++){
				
				$path = 'imagens/' . $categoria . '/' . $id . '/' . $categoria_foto . '/' . $fotos[$i];

                $query_fotos = "INSERT INTO CA_IMAGENS" . 
                " (caminho, categoria, id_produto) VALUES" .
                " (:caminho, :categoria, :id_produto)";

                $stmt = $this->conn->prepare($query_fotos);

                $stmt->bindValue(":caminho", $path);
                $stmt->bindValue(":categoria", $categoria_foto);
                $stmt->bindValue(":id_produto", $id);

                $stmt->execute();

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

            $marca = new Marca($row['id'],$row['nome']);

        } 
     
        return $marca;
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