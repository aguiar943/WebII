<?php

    include 'fachada.php'; 

    // constroi o objeto subcategoria e marca

    $dao = $factory->getSubCategoriaDao();
    $subcategorias = $dao->buscaTodos();

    $dao = $factory->getMarcaDao();
    $marcas = $dao->buscaTodos();

    $dao = $factory->getCorDao();
    $cores = $dao->buscaTodos();

    $dao = $factory->getProdutoDao();

 ?>
<div class="container py-3">
  <div class="" role="document">
	<div class="modal-content rounded-5 shadow">
		<form class="p-4 p-md-5 border rounded-3 bg-light"   method = "post" enctype="multipart/form-data">
			<div class="modal-header p-6 pb-4 border-bottom-0">
					<h4 class="fw-bold mb-0">Novo produto</h4>
			</div>
            <div class="form-floating mb-3">
					<div class="row">
						<div class="text-center">
							<img src="../imagens/logosemfundo.png" width="300" height="70" class="rounded" alt="...">
						  </div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-3">
                        <input type="number" class="form-control" name = "cd_barras" placeholder="Código Barras" required>
						</div>
						<div class="form-group col-md-3">
                        <input type="number" class="form-control" name = "cd_referencia" placeholder="Código Referencia" required>
						</div>
						
					</div>
				</div>

				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-7">
                        <input type="text" class="form-control" name = "descricao" placeholder="Descricao">
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

                                                echo "<option value = '{$id}' >{$nome}</option>";

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
                                                echo "<option value = '{$id}' >{$nome}</option>";

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
                                                echo "<option value = '{$id}' >{$nome}</option>";
                                            }
                                        }

                                    ?>
							</select>
						</div>
						<div class="form-group col-md-1">
							<select class="form-control" name= "cor">
                                <option class="form-control" name = "unidade"></option>
                                    <option selected value = "UN" >UN</option>
                                    <option value = "PC" >PC</option>
                                    <option value = "MT" >MT</option>
                                    <option value = "KG" >KG</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-floating mb-3">
					<div class="row">
						<div class="form-group col-md-2">
							<input type="text" class="form-control" name = "preco_custo" placeholder="Preço Custo" required>
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control" name = "preco_venda" placeholder="Preço Venda" required>
						</div>
					</div>
				</div>
                <div class="form-floating mb-3">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name = "modelo" placeholder = "Modelo" maxlength="10">
                        </div>
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name = "ncm" placeholder = "NCM" required>
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

                            <div class='upload-wrapper me-3'>

                                <label for='upload-fotos-produto' class = "">

                                Enviar foto

                                </label>

                                <input id='upload-fotos-produto' class="form-control" type='file' name = "img_produtos[]" multiple />

                            </div>

                        </div>

                        <div class="form-group col-md-4 d-flex align-items-center me-5">
                            
                            <div id='nome-foto-produto' class = 'me-5' ></div>

                        </div>

                    </div>

                </div>

                <div class="form-floating mb-3 mt-2 cadastro-conta-h">

                    <div class="row mt-4">

                        <div class="form-group col-md-2">

                            <div class='upload-wrapper me-3'>

                                <label for='upload-fotos-detalhe' class = "">

                                    Enviar foto

                                </label>

                                <input id='upload-fotos-detalhe' class="form-control" type='file' name = "img_detalhes[]" multiple />

                            </div>

                        </div>

                        <div class="form-group col-md-4 d-flex align-items-center me-5">

                            <div id='nome-foto-detalhe' class = 'me-5' ></div>

                        </div>


                    </div>

                </div>
                <div class="form-floating mb-3 mt-4">
                    <div class="form-group col-md-8">
                        <button name = "enviar"  type="submit" class="btn btn btn-sm btn-success w-100 cadastro-conta-h"> Cadastrar </button>
                    </div>
                </div>
                <div class="form-floating mb-3 cadastro-conta-h">

                    <div class="row">

                        <div class="form-group col-md-12">

                            <span class="h-100" name = "msg">

                                <?php 

                                    echo $dao->insere(null, $factory);
                                
                                ?>

                            </span>

                        </div>

                    </div>

                </div>
				<hr class="my-4">
				<small class="text-muted"></small>
			</form>
		</div>
	</div>
<?php include 'footer.php'; ?>
