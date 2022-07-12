<?php
interface ProdutosDao {

    public function insere($produto, $factory);
    public function remove($veiculo);
    public function altera($produto, $factory);
    public function alteraFoto($imagens_prod, $path);
    public function buscaPorId($id);
    public function buscaPorNome($login);
    public function buscaTodos();
    public function buscaImagensProduto($id, $categoria_img);
    public function checkQtdCores($index, $produto);

}
?>