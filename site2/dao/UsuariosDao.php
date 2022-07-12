<?php
interface UsuariosDao {

    public function insere($usuario);
    public function remove($usuario);
    public function removePorId($id);
    public function altera(&$usuario);
    public function buscaPorId($id);
    public function buscaPorCpf($login);
    public function buscaTodos();
    public function removePorCPF($us_cpf);
}
?>