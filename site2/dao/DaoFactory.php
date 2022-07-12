<?php
abstract class DaoFactory {

    protected abstract function getConnection();

    public abstract function getSubCategoriaDao();

    public abstract function getProdutoDao();

    public abstract function getCorDao();

    public abstract function getUsuarioDao();

    public abstract function getFornecedorDao();
}
?>