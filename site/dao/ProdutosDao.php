<?php
interface ProdutosDao {

    public function insere($produto, $factory);
    public function RemoveProdutoPoBarras($cd_barras);
    public function altera($produto, $factory);
    public function alteraFoto($imagens_prod, $path);
    public function buscaPorId($id);
    public function buscaTodos();
    public function buscaTodosProdutos();
    public function buscaImagensProduto($id, $categoria_img);
    public function checkQtdCores($index, $produto);

}
?>
