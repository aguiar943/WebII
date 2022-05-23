<?php
interface FornecedorDao {

    public function insere($fornecedor);
    public function buscaTodosFornecedores();
    public function RemoveFornecedorPorCNPJ($fo_cnpj);
    public function alteraFornecedor($fornecedor);
    public function buscaFornecedorCNPJ($login);
    public function PesquisaFornecedor($palavra);
}
?>
