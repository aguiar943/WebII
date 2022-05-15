<?php

    include 'fachada.php'; 

    // constroi o objeto subcategoria e marca

    $cat_encontrada = false;
    $id_produto = explode("=", $_SERVER['REQUEST_URI'])[1];

    $dao = $factory->getSubCategoriaDao();
    $subcategorias = $dao->buscaTodos();

    $dao = $factory->getMarcaDao();
    $marcas = $dao->buscaTodos();

    $dao = $factory->getCorDao();
    $cores = $dao->buscaTodos();

    $dao = $factory->getProdutoDao();
    $produto = $dao->buscaPorId($id_produto);
       

 ?>
 
<div class="container py-3">
  <div class="" role="document">
	<div class="modal-content rounded-5 shadow">
		<form class="p-4 p-md-5 border rounded-3 bg-light"   method = "post" enctype="multipart/form-data">
			<div class="modal-header p-6 pb-4 border-bottom-0">
					<h4 class="fw-bold mb-0">Altera produto</h4>
			</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-3">
                        <input type="number" class="form-control" name = "cd_barras" placeholder="Código Barras" required value = "<?= $produto->getCdBarras(); ?>">
						</div>
						<div class="form-group col-md-3">
                        <input type="number" class="form-control" name = "cd_referencia" placeholder="Código Referencia" required value = "<?= $produto->getCdReferencia(); ?>">
						</div>
						
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-7">
                        <input type="text" class="form-control" name = "descricao" placeholder="Descricao" value = "<?= $produto->getDescricao(); ?>">
						</div>
					</div>
				</div>

                <div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-2">
							<select class="form-control" name = "subcategoria" >
                                <option selected="true" disabled="disabled">Categoria</option>
                                    <?php 
                                         if($subcategorias){ 

                                            while ($row = $subcategorias->fetch(PDO::FETCH_ASSOC)){

                                                extract($row);

                                                if($nome == $produto->getSubcategoria()){

                                                    echo "<option selected='true' value = '{$id}' >{$nome}</option>";

                                                } else {

                                                    echo "<option value = '{$id}' >{$nome}</option>";

                                                }

                                                $arr_categorias[] = new Subcategoria($id, $nome);

                                            }
                                        }
                                    ?>
							</select>
						</div>
                        <div class="form-group col-md-2">
							<select class="form-control" name = "marca" >
                                <option selected="true" disabled="disabled" >Marca</option>
                                        <?php 
                                        if($marcas){ 

                                            while ($row = $marcas->fetch(PDO::FETCH_ASSOC)){

                                                extract($row);

                                                if($nome == $produto->getMarca()){

                                                    echo "<option selected='true' value = '{$id}' >{$nome}</option>";

                                                } else {

                                                    echo "<option value = '{$id}' >{$nome}</option>";

                                                }

                                            }
                                        }
                                        ?>
							</select>
						</div>
                        <div class="form-group col-md-2">
							<select class="form-control" name= "cor">
                                <option selected="true" disabled="disabled" >Cor</option>
                                    <?php 
                                        if($cores){ 

                                            while ($row = $cores->fetch(PDO::FETCH_ASSOC)){

                                                extract($row);

                                                for($i = 0; $i < count ($produto->getCores()); $i++){

                                                    $cor = $produto->getCores()[$i];

                                                    if($nome == $cor){

                                                        $cor_encontrada = true;

                                                        echo "<option selected='true' value = '{$id}' >{$nome}</option>";

                                                        break;

                                                    } 

                                                }

                                                if(!$cor_encontrada){

                                                    echo "<option value = '{$id}' >{$nome}</option>";

                                                } else {

                                                    $cor_encontrada = false;

                                                }

                                            }
                                        }

                                    ?>
							</select>
						</div>
						<div class="form-group col-md-1">
							<select class="form-control" name= "cor">
                                <option class="form-control" name = "unidade"></option>
                                <?php 

                                    $arr_unidades = array("UN", "PC", "MT", "KG");

                                    for($i = 0; $i < count($arr_unidades); $i++){

                                        if($produto->getUnidade() == $arr_unidades[$i]){

                                            echo "<option selected='true' value = '{$arr_unidades[$i]}' >{$arr_unidades[$i]}</option>";

                                        } else {

                                            echo "<option value = '{$arr_unidades[$i]}' >{$arr_unidades[$i]}</option>";

                                        }

                                    }

                                ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-2">
							<input type="text" class="form-control" name = "preco_custo" placeholder="Preço Custo" required value = "<?= $produto->getPrecoCusto(); ?>">
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control" name = "preco_venda" placeholder="Preço Venda" required value = "<?= $produto->getPrecoVenda(); ?>">
						</div>
					</div>
				</div>
                <div class="form-floating mb-3">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name = "modelo" placeholder = "Modelo" maxlength="10" value = "<?= $produto->getModelo(); ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name = "ncm" placeholder = "NCM" required value = "<?= $produto->getNcm(); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <div class="form-group col-md-7">
                        <select class="form-control" id="idFornecedoreProduto" placeholder="Fornecedor">
                            <option>Fornedor</option>
                        </select>
                    </div>
                </div>
                <div class="form-floating mb-3 mt-2 cadastro-conta-h">

<div class="row mt-4">

    <div class="form-group col-md-2">

        <select class="form-control" name = "img_vitrine_cmb[]" size = "3" style = "overflow: hidden;" multiple>

            <option disabled="disabled" >Imagens Vitrine</option>
            
            <?php

                for($i = 0; $i < count($produto->getImgsVitrine()); $i++){

                    $img = $produto->getImgsVitrine()[$i]->getNome();
                    $img_id = $produto->getImgsVitrine()[$i]->getId();

                    echo "<option value = '" . $img_id . "' >" . $img . "</option>";

                }
            
            ?>

        </select>

    </div>        

    <div class="form-group col-md-2">

        <div class='upload-wrapper me-3'>

            <label for='upload-fotos-produto' class = "">

                Alterar fotos

            </label>

            <input id='upload-fotos-produto' class="form-control" type='file' name = "img_produtos[]" multiple/>

        </div>

    </div>

    <div class="form-group col-md-2">

        <select class="form-control w-100" name = "img_detalhes_cmb[]" size = "3" style = "overflow: hidden;" multiple>

            <option disabled="disabled" >Imagens Detalhe</option>

            <?php

                for($i = 0; $i < count($produto->getImgsDetalhes()); $i++){

                    $img = $produto->getImgsDetalhes()[$i]->getNome();
                    $img_id = $produto->getImgsDetalhes()[$i]->getId();

                    echo "<option value = '" . $img_id . "' >" . $img . "</option>";

                }
            
            ?>

        </select>

    </div>

    <div class="form-group col-md-2">

        <div class='upload-wrapper me-3'>

            <label for='upload-fotos-detalhes' class = "">

                Alterar fotos

            </label>

            <input id='upload-fotos-detalhes' class="form-control" type='file' name = "img_detalhes[]" multiple />

        </div>

    </div>

</div>

<div class="row">  

    <div class="form-group col-md-12 d-flex align-items-center me-5">
        
        <div id='nome-foto-produto' class = 'me-4' >


        </div>

        <div id='nome-foto-detalhe' class = 'ms-2' >
            
    
        </div>

    </div>

</div>

<div class="row ">

    <div class="form-group col-md-8">

        <span class="h-100" name = "msg">

            <?php 

                if(isset($_POST['enviar'])){

                    echo $dao->altera($produto, $factory);

                }
            ?>

        </span>

    </div>

    </div>
    </div>  
                <div class="form-floating mb-3 mt-4">
                    <div class="form-group col-md-8">
                        <button name = "enviar"  type="submit" class="btn btn btn-sm btn-success w-100 cadastro-conta-h"> Cadastrar </button>
                        
                    </div>
                    
                </div>
                <div class="form-floating mb-3 mt-4">
                    <div class="form-group col-md-8">
                    <a class="w-100 btn btn-secondary" href="cadastro_produtos.php">Cancela</a>
                        
                    </div>
                    
                </div>
				<hr class="my-4">
				<small class="text-muted"></small>
			</form>
		</div>
	</div>
<?php include 'footer.php'; ?>