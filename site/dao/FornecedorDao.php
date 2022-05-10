<?php
interface FornecedorDao {

    public function insere($fornecedor);
    public function buscaTodosFornecedores();
    public function RemoveFornecedorPorCNPJ($fo_cnpj);
    public function alteraFornecedor($login);
    public function buscaFornecedorCNPJ($login);
}
?>