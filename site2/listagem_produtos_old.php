<?php 

  require "fachada.php";

?>

<div class="container py-3">
	
  <div class="" role="document">

    <div class="modal-content rounded-5 shadow">
  
      <form class="p-4 p-md-5 border rounded-3 bg-light">
    
        <div class="modal-header p-6 pb-4 border-bottom-0">
    
          <h2 class="fw-bold mb-0"> Cadastro Produtos </h2>
    
        </div>
  
        <section>
    
          <?php

          $dao = $factory->getProdutoDao();
          $produtos = $dao->buscaTodos();

          if($produtos) { ?>

            <table class='table table-hover table-responsive table-bordered'>

              <tr>

                <th> Barras </th>
                <th> Nome </th>
                <th> Marca </th>
                <th> Modelo </th>
                <th> Preço de venda </th>
                <th> Opções </th>

              </tr>

                <?php

                foreach ($produtos as $produto) {

                  extract($produto); ?>

                  <tr>

                    <td> <?= $cd_barras; ?> </td>
                    <td> <?= $subcategoria; ?> </td>
                    <td> <?= $marca; ?> </td>
                    <td> <?= $modelo; ?> </td>
                    <td> <?= $preco_venda; ?> </td>

                    <td> 

                      <a href='mostra_usuario.php?cd_barras=<?= $cd_barras ?>' class='btn btn-primary left-margin'>

                        <span class='glyphicon glyphicon-list'></span> Visualizar

                      </a>

                      <a href='altera_produto.php?produto=<?= $id; ?>' class='btn btn-info left-margin ms-2'>

                        <span class='glyphicon glyphicon-edit'></span> Alterar

                      </a>

                      <a href='remove_produto.php?cd_barras=<?= $cd_barras ?>' class='btn btn-danger left-margin ms-2'
                        onclick = "return confirm('Confirma exclusão do produto?')"   
                      >

                        <span class='glyphicon glyphicon-remove'></span> Excluir

                      </a>

                    </td>

                  </tr> <?php

                } ?>
            </table> <?php
          } ?>
          <a href='novo_produto.php' class='btn btn btn-success left-margin'> Novo </a>
    
        </section>

      </form>
      
    </div>
	   
  </div>

</div>
	
<hr class="featurette-divider">

<?php include "footer.php"; ?>