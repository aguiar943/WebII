<?php
interface VeiculosDao {

    public function insere($veiculo);
    public function remove($veiculo);
    public function altera($veiculo);
    public function buscaPorId($id);
    public function buscaPorNome($login);
    public function buscaTodos();
}
?>