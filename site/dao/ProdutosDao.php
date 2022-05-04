<?php
interface ProdutosDao {

    public function insere($produto, $factory);
    public function RemoveProdutoPoBarras($cd_barras);
    public function altera($veiculo);
    public function buscaTodosProdutos();
}
?>