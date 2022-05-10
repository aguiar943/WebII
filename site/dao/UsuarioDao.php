<?php
interface UsuarioDao {

    public function insere($usuario);
    public function removePorCPF($us_cpf);
    public function altera(&$usuario);
    public function buscaPorCPF($login);
    public function buscaTodos();
    public function PesquisaUsuario($palavra);
}
?>