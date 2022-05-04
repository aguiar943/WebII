<?php
interface FornecedoresDao {

    public function insere($fornecedor);
    public function remove($usuario);
    public function removePorId($id);
    public function altera(&$usuario);
    public function buscaPorId($id);
    public function buscaPorLogin($login);
    public function buscaPorCPF($login);
    public function buscaTodos();
}
?>