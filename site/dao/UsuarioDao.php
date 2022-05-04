<?php
interface UsuarioDao {

    public function insere($usuario);
    public function remove($usuario);
    public function removePorCPF($us_cpf);
    public function altera(&$usuario);
    public function buscaPorId($id);
    public function buscaPorLogin($login);
    public function buscaPorCPF($login);
    public function buscaTodos();
}
?>