<?php
interface ProdutosDao {

    public function insere($produto, $factory);
    public function remove($veiculo);
    public function altera($veiculo);
    public function buscaPorId($id);
    public function buscaPorNome($login);
    public function buscaTodos();
}
?>