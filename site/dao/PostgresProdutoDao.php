<?php

include_once('PostgresDao.php');
include_once('ProdutosDao.php');
include_once('validacoes/ProdutosForm.php');
include_once('validacoes/Paginacao.php');

class PostgresProdutoDao extends PostgresDao implements ProdutosDao {

    private $table_name = 'CA_PRODUTOS';
    private $qtd_fotos = 0;
    private $qtd_fotos_detalhes = 0;
    private $msg = "";
    private $inserido = false;

    public function insere($produto, $factory) {
	    
	$id = 0;

        if(isset($_POST['enviar']) && (isset($_FILES['img_produtos']) || isset($_FILES['img_detalhes']))){
		
	    $produto = ProdutosForm::getProdutoForm($factory);

	    $this->qtd_fotos = (count(array_filter($_FILES['img_produtos']['name']))) ;
	    $this->qtd_fotos_detalhes = (count(array_filter($_FILES['img_detalhes']['name']))) ;
		
	    $query_produto = "INSERT INTO " . $this->table_name . 
	    	" (descricao, modelo, preco_custo, preco_venda, cd_barras, cd_referencia, unidade, ncm, id_marca, id_subcategoria) VALUES" .
	    	" (:descricao, :modelo, :preco_custo, :preco_venda, :cd_barras, :cd_referencia, :unidade, :ncm, :marca, :subcategoria)";

            $stmt = $this->conn->prepare($query_produto);
		
	    if(ProdutosForm::validar($produto, $this->qtd_fotos, $this->qtd_fotos_detalhes) == "ok"){

            	$stmt->bindValue(":descricao", $produto->getDescricao());
            	$stmt->bindValue(":modelo", $produto->getModelo());
            	$stmt->bindValue(":preco_custo", $produto->getPrecoCusto());
            	$stmt->bindValue(":preco_venda", $produto->getPrecoVenda());
            	$stmt->bindValue(":cd_barras", $produto->getCdBarras());
            	$stmt->bindValue(":cd_referencia", $produto->getCdReferencia());
            	$stmt->bindValue(":unidade", $produto->getUnidade()) ;
            	$stmt->bindValue(":ncm", $produto->getNcm());
            	$stmt->bindValue(":marca", $produto->getMarca()->getId());
                $stmt->bindValue(":subcategoria", $produto->getSubcategoria()->getId());
		    
		$stmt->execute();
            
            	try{
                	$id = $this->conn->lastInsertId();

               		$this->inserirFotos(
                    
                		$this->qtd_fotos, "Vitrine", $id, 
                		$produto->getSubcategoria()->getNome(),
               			$_FILES['img_produtos']['name']
               		);
                    
               		$this->inserirFotos(
                    
              			$this->qtd_fotos_detalhes, "Detalhes", $id, 
               			$produto->getSubcategoria()->getNome(),
               			$_FILES['img_detalhes']['name']
                    	);

                    	$this->msg = "Produto cadastrado com sucesso!";
                    	$this->inserido = true;

            	}catch(Exception $ex){

                	$this->msg = "Erro ao gravar imagens! -> " . $ex->getMessage();

            	}

            } else {
		    
	       	$this->msg = ProdutosForm::validar($produto, $this->qtd_fotos, $this->qtd_fotos_detalhes);
		    
	    }

        }
	    
	if($this->inserido){

            $this->msg = $this->msg . $this->adicionarCores($id, 0, $produto->getCores());

        }

        return $msg;

    }
	
    public function adicionarCores($id_produto, $index_cores, $cores){

        for($i = $index_cores; $i < count($cores); $i++){

            $query_cor = "INSERT INTO rel_produto_cor (id_produto, id_cor) VALUES (:id_produto, :id_cor)";

            $stmt = $this->conn->prepare($query_cor);

            $stmt->bindValue(":id_produto", $id_produto);
            $stmt->bindValue(":id_cor", $cores[$i]);

            try{

                $stmt->execute();

            } catch(Exception $ex){

                return $ex->getMessage();

            }

        }

    }

    public function inserirFotos($qtd_fotos, $categoria_foto, $id, $categoria, $fotos){

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

    public function RemoveProdutoPoBarras($cd_barras) {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE cd_barras = :cd_barras";

        $stmt = $this->conn->prepare($query);
        // bind parameters
        $stmt->bindParam(':cd_barras', $cd_barras);

        // execute the query
        if($stmt->execute()){
            return true;
        }    
        return false;
    }

    public function altera($produto, $factory) {

        $msg = "Ocorreu um erro ao tentar alterar o produto !";
		$error_cor = true;
			
		$cores_escolhidas = array();
			
		$id = $produto->getId();
			$cores = $produto->getCores();
			$imgs_vitrine = $produto->getImgsVitrine();
			$imgs_detalhes = $produto->getImgsDetalhes();

			$produto = ProdutosForm::getProdutoForm($factory);
			
		$index_cor_cmb = 0;

        $query_produto = "UPDATE " . $this->table_name . 
        " SET descricao = :descricao, modelo = :modelo, preco_custo = :preco_custo," .
        " preco_venda = :preco_venda, cd_barras = :cd_barras, cd_referencia = :cd_referencia," .
        " unidade = :unidade, ncm = :ncm, id_marca = :id_marca, id_subcategoria = :id_subcategoria" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query_produto);

		if(ProdutosForm::validar($produto, 1, 1) == "ok"){
		 
			$stmt->bindValue(":descricao", $produto->getDescricao() );
			$stmt->bindValue(":modelo", $produto->getModelo() );
			$stmt->bindValue(":preco_custo", $produto->getPrecoCusto() );
			$stmt->bindValue(":preco_venda", $produto->getPrecoVenda() );
			$stmt->bindValue(":cd_barras", $produto->getCdBarras() );
			$stmt->bindValue(':cd_referencia', $produto->getCdReferencia() );
			$stmt->bindValue(':unidade', $produto->getUnidade()  );
			$stmt->bindValue(':ncm', $produto->getNcm() );
			$stmt->bindValue(':id_marca', $produto->getMarca()->getId() );
			$stmt->bindValue(':id_subcategoria', $produto->getSubcategoria()->getId() );
			$stmt->bindValue(':id', $id );

			$stmt = $this->conn->prepare($query_produto);
			
			try{

				$stmt->execute();
			$cores_escolhidas = $_POST['cor'];
				$msg = "Produto alterado com sucesso !";

			} catch(Exception $ex){

				return $ex->getMessage();
				$msg = $msg . "Exceção: " . $ex->getMessage();

			}
    	/*
         * Rodrigo, seria interessante ativar esse else, pelos menos ativar ele quando estiver perto da data
         * de entrega pois se der algum erro de dado incorreto, como um número informado em um campo que só
         * aceita letra ou uma letra inserida em um campo que só aceita números, ou campos que esperavam 
         * ter 13 dígitos e só receberam 7 dígitos, por exemplo, o sistema vai dar uma mensagem de erro específica.
         * Mandei um ajuste para terminar de tratar a validação da cor de forma que não exibisse exceções ou
         * avisos de warning que eu encontrei, acredito que esqueci de mandar o ajuste antes por isto ainda
         * tinha alguma inconsistência parte.
         * Informei lá na descrição de modificação do git os detalhes do que eu ajustei caso ainda ficar alguma
         * dúvida. Valeu
         */

        /*else {

            $msg = ProdutosForm::validar($produto, 1, 1);

        }*/
	    
		for($i = 0; $i < count($cores); $i++) {
				
			$id_rel = $cores[$i]->getIdRelProduto() ;

			$query_cor_produto = "UPDATE rel_produto_cor SET " .
				"id_produto = :id_produto, id_cor = :id_cor " . 
			" WHERE id =:id";

			$stmt_cor = $this->conn->prepare($query_cor_produto);
				
			if($error_cor == true && count($cores_escolhidas) > 0) {
				
				try{
						
					$stmt_cor->bindValue(":id_produto", $id);
					$stmt_cor->bindValue(":id", $id_rel);
					$stmt_cor->bindValue(":id_cor", $cores_escolhidas[$index_cor_cmb]);

					$stmt_cor->execute();

				}catch(PDOException $ex){

					$msg = " Erro ao alterar a cor do produto: " . $ex->getMessage() . "\n"; 
					$error_cor = false;

				}

			}
				
			$index_cor_cmb++;
				
		   }
			
		   if($error_cor == true){
				
			$this->adicionarCores($id, count($cores), $produto->getCores());

		   }
			
		   $this->adicionarCores($id, count($cores), $produto->getCores());

			   $path_vitrine = "imagens/" . $produto->getSubcategoria()->getNome() . "/" . $id . "/Vitrine/";
			   $path_detalhe = "imagens/" . $produto->getSubcategoria()->getNome() . "/" . $id . "/Detalhes/";


			$msg =  $msg . $this->alteraFoto(

				$imgs_vitrine, $path_vitrine

			);

			$msg =  $msg . $this->alteraFoto(

				$imgs_detalhes, $path_detalhe

			);

			return $msg;
		}
	}
	
    public function alteraFoto($imagens_prod, $path){

        $erro = "";

        $imagens_cmb = array();
        $imagens_novas = array();

        if(isset($_POST['img_vitrine_cmb']) && count($_FILES['img_produtos']['name']) > 0 && $imagens_prod[0]->getCategoria() == "Vitrine"){

            $imagens_cmb = $_POST['img_vitrine_cmb'];

            $imagens_novas = $_FILES['img_produtos']['name'];
            
        } else if(isset($_POST['img_detalhes_cmb']) && count($_FILES['img_detalhes']['name']) > 0 && $imagens_prod[0]->getCategoria() == "Detalhes"){

            $imagens_cmb = $_POST['img_detalhes_cmb'];

            $imagens_novas = $_FILES['img_detalhes']['name'];

        }

        if(count($imagens_cmb) > 0){

            for($i = 0; $i < count($imagens_cmb); $i++){

                $caminho = "";
                $id_img = "";
    
                $query_img = 
                "UPDATE ca_imagens SET caminho = :caminho ".
                "WHERE id = :id";
    
                $stmt = $this->conn->prepare($query_img);

                for($j = 0; $j < count($imagens_prod); $j++){

                    if($imagens_cmb[$i] == $imagens_prod[$j]->getId() ){

                        $id_img = $imagens_prod[$j]->getId();
                        $caminho = $path . $imagens_novas[$i];

                    }

                }
    
                $stmt->bindValue(":id", $id_img );
                $stmt->bindValue(":caminho", $caminho );
    
                if(!$stmt->execute()){
    
                    $erro = ". Ocorreu um erro ao tentar alterar a foto do produto !";
        
                } 
        
            }

        }

        return $erro;

    }

    public function buscaPorId($id) {
        
        $cores = array();
        
        $query = 
        "SELECT pro.id, pro.descricao, pro.modelo, pro.preco_custo, pro.preco_venda,
                pro.cd_barras, pro.cd_referencia, pro.unidade, pro.ncm,
                sub.nome subcategoria, mar.nome marca
            FROM " . $this->table_name . " pro 
            INNER JOIN ca_marcas mar 
                ON mar.id = pro.id_marca 
            INNER JOIN ca_subcategorias sub 
                ON sub.id = pro.id_subcategoria 
        WHERE pro.id = ?";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(1, $id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {

            $produto = new Produto(

                $row['descricao'], $row['modelo'], $row['preco_custo'], $row['preco_venda'],
                $row['cd_barras'], $row['cd_referencia'], $row['unidade'], $row['ncm']

            );

            $produto->setId($row['id']);
            $produto->setMarca($row['marca']);
            $produto->setSubcategoria($row['subcategoria']);

        } 

        /* Select para exibir a relação das cores que o produto possui */

        $query_cor = 
        "SELECT rel_cor.id id_rel, ccor.id, ccor.nome cor, ccor.cd_hex hex 
            FROM rel_produto_cor rel_cor 
            INNER JOIN ca_cores ccor 
                ON ccor.id = rel_cor.id_cor 
        WHERE rel_cor.id_produto = ?;";

        $stmt2 = $this->conn->prepare( $query_cor );
        $stmt2->bindValue(1, $id);
        $stmt2->execute();

        if($stmt2){

            while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
		    
		$cor = new Cor($row2['id'], $row2['cor'], $row2['hex']);
		$cor->setIdRelProduto($row2['id_rel']);

                $cores[] = $row2['cor'];

            }

            $produto->setCores($cores);

        }

        $produto->setImgsVitrine($this->buscaImagensProduto($produto->getId(), "Vitrine"));
        $produto->setImgsDetalhes($this->buscaImagensProduto($produto->getId(), "Detalhes"));
        
        return $produto;
    }
	
    /* Select para exibir a relação das imagens que o produto possui */

    public function buscaImagensProduto($id, $categoria_img){

        $imgs = array();

        $query_img = 
        "SELECT img.id, img.caminho, img.categoria, img.id_produto 
            FROM ca_imagens img 
        WHERE img.id_produto = ? AND img.categoria = ?";

        $stmt = $this->conn->prepare( $query_img );
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $categoria_img);
        $stmt->execute();

        if($stmt){

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                $path = explode("/", $row['caminho']);

                $img = new Imagem($row['id'], end($path), $categoria_img);
                
                $imgs[] = $img;

                
            }

        }

        return $imgs;

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

    public function buscaTodosProdutos() {
        $produtos = array();
        $query = "SELECT
                      descricao, modelo, preco_custo, preco_venda, cd_barras, cd_referencia, unidade, ncm, id_marca, id_subcategoria
                FROM
                    " . $this->table_name . 
                    " ORDER BY id ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $produtos[] = new Produto($descricao, $modelo, $preco_custo, $preco_venda, $cd_barras, $cd_referencia, $unidade, $ncm);
        } 
        return $produtos;
      
    }
	
    /* Método para trazer todos os produtos junto com suas subcategorias e marcas atreladas */
	
    public function buscaTodos() {

        $query = 
        "SELECT pro.id, pro.descricao, pro.modelo, pro.preco_custo, pro.preco_venda,
                pro.cd_barras, pro.cd_referencia, pro.unidade, pro.ncm,
                sub.nome subcategoria, mar.nome marca
            FROM " . $this->table_name . " pro 
            INNER JOIN ca_marcas mar 
                ON mar.id = pro.id_marca 
            INNER JOIN ca_subcategorias sub 
                ON sub.id = pro.id_subcategoria 
        ORDER BY pro.id ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
	
	
}
?>
