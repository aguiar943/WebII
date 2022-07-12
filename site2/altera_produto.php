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

<div id = "detalhes_produto" class = "row d-flex justify-content-center border border-dark" >

    <div id = "fotos-categorias" class = "row mt-2 w-75 me-5 ms-3" >

        <div id = "geral-categorias-conta" class = "col-xl-8 ms-4 h-100 border border-dark " >

            <div id = "geral-bot-conta" class = "row h-100 border border-dark justify-content-start ">

                <div id = "categoria" class = "col-sm-12 col-lg-1 col-xl-1 mb-2 mt-3  ms-3 bg-light">

                    <div class="row h-25 bg-primary border border-dark" >


                        <div class = "col-12 col-sm-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" > 

                            <b class = "" > GERENCIAR </b> 

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" >

                            <a href = "listagem.php?=1" class = "conta" > Pedidos </a>

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" >

                            <a href = "listagem_produtos.php?=1" class = "conta" > Produtos </a>

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light">

                            <a href = "listagem_fornecedor.php?=1" class = "conta" > Fornecedores </a>

                        </div>

                        <div class = "col-12 col-lg-12 col-xl-12 center-flx justify-content-start border border-dark bg-light" >

                            <a href = "listagem_usuarios.php?=1" class = "conta"> Usuários </a>

                        </div> 

                    </div>

                </div>
    
                <div id = "menu-fotos-conta" class = "col-xl-10 border border-dark mt-3 ms-3 me-3" >
            
                    <div id = "foto" class = "row  mt-1 ">

                        <div class="container py-3 ">
	
                            <div class="bg-primary" role="document">

                                <div class="modal-content rounded-5 shadow">

                                    <div class="modal-header p-6 pb-1 ">
                                
                                        <h4 class="fw-bold mb-0">Alteração de Produtos</h4>
                                
                                    </div>
                            
                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x content-area" method = "post" enctype="multipart/form-data" >
                                
                                        <section>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="number" name = "cd_barras" placeholder="Código de Barras"
                                                           class="form-control" value = "<?= $produto->getCdBarras(); ?>" 
                                                        title = "Código de Barras"  required 
                                                    >

                                                </div>

                                                <div class = "col-12 col-md-4 col-lg-4 col-xl-3 mt-1 text-warning" >
                                                    
                                                    <input type="number" name = "cd_referencia" placeholder="Cod Referência"
                                                           class="form-control" value = "<?= $produto->getCdReferencia(); ?>" 
                                                        title = "Código de Refêrencia" required 
                                                    >

                                                </div>

                                                <div class = "col-12 col-md-3 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="text" name = "ncm" placeholder="Cod NCM"
                                                           class="form-control" value = "<?= $produto->getNcm(); ?>"
                                                        title = "Código NCM" maxlength="8" required 
                                                    >

                                                </div>

                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-1 text-danger"> 

                                                    <select class="form-select" name = "subcategoria" title = "Subcategoria" >

                                                        <option selected='true' disabled='disabled' >Subcategoria</option>

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

                                                <div class = "col-12 col-md-4 col-lg-4 col-xl-3 mt-1 text-danger"> 

                                                    <select class="form-select" name = "marca" title = "Marca" >

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

                                                <div class = "col-12 col-md-3 col-lg-4 col-xl-3 mt-1 text-danger"> 

                                                    <select class="form-select" name = "unidade" title = "Unidade" >

                                                        <option selected='true' disabled='disabled' >Unidade</option>

                                                        <?php 

                                                        $arr_unidades = array("UN", "PC", "MT", "KG");

                                                        for($i = 0; $i < count($arr_unidades); $i++){

                                                            if($produto->getUnidade() == $arr_unidades[$i]){

                                                                /* Item selecionado */ 

                                                                echo "<option selected='true' value = '{$arr_unidades[$i]}' >{$arr_unidades[$i]}</option>";

                                                            } else {

                                                                /* Item não selecionado */ 

                                                                echo "<option value = '{$arr_unidades[$i]}' >{$arr_unidades[$i]}</option>";

                                                            }

                                                        }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="text" name = "modelo" placeholder="Modelo"
                                                            class="form-control" value = "<?= $produto->getModelo(); ?>" 
                                                        title = "Modelo" maxlength="16" required 
                                                    >

                                                </div>

                                                <div class = "col-12 col-md-4 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="number" name = "preco_venda" placeholder="Preço Venda"
                                                            class="form-control" value = "<?= $produto->getPrecoVenda(); ?>" 
                                                        title = "Preço de Venda" required 
                                                    >

                                                </div>

                                                <div class = "col-12 col-md-3 col-lg-4 col-xl-3 mt-1"> 

                                                    <input type="number" name = "preco_custo" placeholder="Custo"
                                                            class="form-control" value = "<?= $produto->getPrecoCusto(); ?>" 
                                                        title = "Preço de Custo" required 
                                                    >

                                                </div>

                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-3 text-danger"> 

                                                    <select class="form-select h-75 " name = "cor[]" title = "Cor"  multiple>

                                                        <option disabled="disabled" >Cor</option>

                                                        <?php
                                                        
                                                        $cor_encontrada = false;

                                                        if($cores){ 

                                                            while ($row = $cores->fetch(PDO::FETCH_ASSOC)){

                                                                extract($row);

                                                                for($i = 0; $i < count ($produto->getCores()); $i++){

                                                                    $cor = $produto->getCores()[$i]->getNome();

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

                                                <div class = "col-12 col-md-7 col-lg-8 col-xl-6 mt-3"> 

                                                    <textarea name = "descricao" placeholder="Descrição" 
                                                            class="form-control text-left  h-75 " rows="3"
                                                        title = "Descrição" maxlength="400" required
                                                    ><?= $produto->getDescricao(); ?></textarea>

                                                </div>

                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-3 text-danger">

                                                    <select class="form-select h-75" name = "img_vitrine_cmb[]"  multiple>

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
                                                
                                                <div class = "col-12 col-md-4 col-lg-3 col-xl-2 mt-1 d-flex align-items-center">
                                                    
                                                    <div class='upload-wrapper me-3 mb-4 '>

                                                        <label for='upload-fotos-produto' class = "">

                                                            Alterar fotos

                                                        </label>

                                                        <input id='upload-fotos-produto' class="form-control" type='file' name = "img_produtos[]" multiple/>

                                                    </div>

                                                </div>

                                                <div class = "col-12 col-md-8 col-lg-5 col-xl-4 d-flex align-items-center ">

                                                    <div id='nome-foto-produto' class = 'mb-4' >


                                                    </div>

                                                </div>
                                            
                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 mt-3 text-danger">

                                                    <select class="form-select w-100 h-75" name = "img_detalhes_cmb[]" multiple>

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

                                                <div class = "col-12 col-md-4 col-lg-3 col-xl-2 mt-1 d-flex align-items-center">

                                                    <div class='upload-wrapper me-3 mb-4'>

                                                        <label for='upload-fotos-detalhe' class = "">

                                                            Alterar fotos

                                                        </label>

                                                        <input id='upload-fotos-detalhe' class="form-control" type='file' name = "img_detalhes[]" multiple />

                                                    </div>

                                                </div>

                                                <div class = "col-12 col-md-8 col-lg-5 col-xl-4 d-flex align-items-center">

                                                    <div id='nome-foto-detalhe' class = 'mb-4' >
                                                        
                                                
                                                    </div>

                                                </div>
                                            
                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-12 col-lg-12 col-xl-12 mt-3 text-danger">

                                                    <span class="h-100" name = "msg">

                                                        <?php 

                                                            if(isset($_POST['enviar'])){

                                                                echo $dao->altera($produto, $factory);

                                                            }
                                                        ?>

                                                    </span>

                                                </div>
                                            
                                            </div>

                                            <div class = "row border border-dark ">

                                                <div class = "col-12 col-md-5 col-lg-4 col-xl-3 text-danger h-100">

                                                    <button name = "enviar"  type="submit" class="btn btn-sm btn-success w-100 mt-2 mb-2"> 

                                                        Alterar 

                                                    </button>

                                                </div>

                                            </div>
                                    
                                        </section>

                                    </form>
                                
                                </div>
                                
                            </div>

                        </div>

                        <hr class="featurette-divider">                                               

                    </div>

                </div>

            </div>
        
        </div>

    </div><?php include 'footer.php'; ?>

</div>