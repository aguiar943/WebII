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

<div id = "detalhes_produto" class = "row d-flex justify-content-center border border-dark h-100" > <!-- bg-secondary -->

    <div id = "fotos-categorias" class = "row mt-2 w-75 me-5 ms-3" >

        <div id = "geral-categorias-conta" class = "col-xl-8 ms-4 h-100 border border-dark " > <!-- bg-primary -->

            <div id = "geral-bot-conta" class = "row h-100 border border-dark d-flex justify-content-center "> <!-- bg-danger -->

                <div id = "categoria" class = "col-xl-1 mb-2 mt-3 ms-2"> <!-- bg-warning -->

                    <div class="w-100 me-5 border border-dark p-1 bg-cat" > <!-- bg-sucess -->

                        <div class = "center-flx border border-dark justify-content-start " > 

                            <b class = "ms-3" > CADASTROS </b> 

                        </div>

                        <div class = "center-flx border border-dark" >

                            Produtos

                        </div>

                        <div class = "center-flx border border-dark">

                            Fornecedores

                        </div>

                        <div class = "center-flx border border-dark " >

                            Teclados

                        </div>                      

                    </div>

                </div>
    
                <div id = "menu-fotos-conta" class = "col-xl-10 border border-dark mt-3 ms-2" ><!-- bg-secondary -->

                    <!-- Fim Mauricio -->
            
                    <div id = "foto" class = "row ms-1 me-1 mt-3">
                        
                        <!-- Inicio Rodrigo -->

                        <div class="container py-3">

                            <div class="" role="document">

                                <div class="modal-content rounded-5 shadow">

                                    <div class="modal-header p-6 pb-3 border-bottom-0">

                                        <h4 class="fw-bold mb-0">CADASTRO - PRODUTOS</h4>

                                    </div>

                                    <form class="p-4 p-md-2 border rounded bg-light cadastro-conta-x " method = "post" enctype="multipart/form-data" >

                                        <div class="form-floating cadastro-conta-h mb-4">

                                            <div class="row">

                                                <div class="form-group col-md-2">

                                                    <input type="number" class="form-control" name = "cd_barras" placeholder="Código Barras" required>

                                                </div>

                                                <div class="form-group col-md-2">

                                                    <input type="number" class="form-control" name = "cd_referencia" placeholder="Código Referencia" required>

                                                </div>

                                                <div class="form-group col-md-2">

                                                    <select class="form-select" name = "subcategoria" >

                                                        <option selected="true" disabled="disabled" >Categoria</option>

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

                                                    <select class="form-select" name = "marca" >

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
                                                
                                            </div>

                                        </div>

                                        <div class="form-floating mb-3 cadastro-conta-h">

                                            <div class="row">

                                                <div class="form-group col-md-8">

                                                    <input type="text" class="form-control" name = "descricao" placeholder="Descricao">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-floating mt-2 mb-3 cadastro-conta-h">

                                            <div class="row mt-4 ">

                                                <div class="form-group col-md-2">

                                                    <input type="number" class="form-control" name = "preco_custo" placeholder="Preço Custo" required>

                                                </div>

                                                <div class="form-group col-md-2">

                                                    <input type="number" class="form-control" name = "preco_venda" placeholder="Preço Venda" required>

                                                </div>

                                                <div class="form-group col-md-2">

                                                    <select class="form-control" name = "unidade">

                                                        <option selected value = "UN" >UN</option>

                                                        <option value = "PC" >PC</option>

                                                        <option value = "MT" >MT</option>

                                                        <option value = "KG" >KG</option>

                                                    </select>

                                                </div>

                                                <div class="form-group col-md-2">

                                                    <select class="form-select h-75" name = "cor" multiple>

                                                        <option disabled="disabled" >Selecione a Cor</option>

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

                                            </div>

                                        </div>

                                        <div class="form-floating mb-3 mt-2  cadastro-conta-h">

                                            <div class="row mt-4">

                                                <div class="form-group col-md-4">

                                                    <input type = "text" class = "form-control" name = "modelo" placeholder = "Modelo" maxlength="10"
                                                    >

                                                </div>

                                                <div class="form-group col-md-2">

                                                    <input type = "text" class = "form-control" name = "ncm" placeholder = "NCM" required
                                                    >

                                                </div>

                                                <!--

                                                <div class="form-group col-md-2">

                                                    <input type="text" class="form-control" id="idEstoqueProduto" placeholder="Estoque">

                                                </div>

                                                -->

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

                                        
                                        
                                        <br> <br>

                                    </form>

                                </div>

                            </div>

                        </div>

                        <hr class="featurette-divider">                                               

                    </div>

                </div>

            </div>
        
        </div>

    </div>

</div>
<?php include 'footer.php'; ?>




