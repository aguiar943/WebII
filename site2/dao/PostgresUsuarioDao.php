<?php

include_once('UsuariosDao.php');
include_once('PostgresDao.php');

include_once('validacoes/UsuariosForm.php');

class PostgresUsuarioDao extends PostgresDao implements UsuariosDao {

    private $table_name = 'usuarios';
    private $usuario;
    
    public function insere($usuario) {
       
        if(isset($_POST['env'])){

            $usuario = UsuariosForm::getUsuarioForm();

            $query = "INSERT INTO " . $this->table_name . 
            " (nome, email, senha, cpf, celular1, celular2, rg, cartao, provedor) VALUES" .
            " (:nome, :email, :senha, :cpf, :celular1, :celular2, :rg, :cartao, :provedor)";

            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":nome", $usuario->getNome() );
            $stmt->bindValue(":email", $usuario->getEmail() );
            $stmt->bindValue(":senha", $usuario->getSenha() );
            $stmt->bindValue(":cpf", $usuario->getCPF() );
            $stmt->bindValue(":celular1", $usuario->getCelular() );
            $stmt->bindValue(":celular2", $usuario->getTelefone() );
            $stmt->bindValue(":rg", $usuario->getRG() );
            $stmt->bindValue(":cartao", $usuario->getCartao() );
            $stmt->bindValue(":provedor", $usuario->getProvedor() );

            $msg = UsuariosForm::validar($usuario);

            if($msg == "ok"  && $stmt->execute()){

                return "Usuário cadastrado com sucesso";

            }else{

                return UsuariosForm::validar($usuario);

            }

        }   
    }

    public function removePorId($id) {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(':id', $id);

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function remove($usuario) {
        return removePorId($usuario->getId());
    }

    public function altera($usuario) {

        $query = "UPDATE " . $this->table_name . 
        " SET cpf = :cpf, senha = :senha, nome = :nome" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindValue(":cpf", $usuario->getCpf());
        $stmt->bindValue(":senha", md5($usuario->getSenha()));
        $stmt->bindValue(":nome", $usuario->getNome());
        $stmt->bindValue(':id', $usuario->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function buscaPorId($id) {
        
        $usuario = null;

        $query = "SELECT
                    id, cpf, nome, senha
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(1, $id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $usuario = new Usuario($row['id'],$row['cpf'], $row['senha'], $row['nome']);
        } 
     
        return $usuario;
    }

    public function buscaTodos() {

        $query = 
        "SELECT id, email, senha, nome, cpf, rg, celular1, celular2, cartao
            FROM " . $this->table_name . 
        " ORDER BY nome ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        
        return $stmt;
    }
	
	public function buscaPorCPF() {

        $login_encontrado = false;

        $query = "SELECT cpf, email, nome, rg, celular1, celular2, senha, cartao FROM " . $this->table_name . "
            WHERE
                cpf = ?
            AND
                senha = ?
        LIMIT 1 OFFSET 0";
    
        $stmt = $this->conn->prepare( $query );

        $stmt->bindValue(1, $_POST['cpf'] );
        $stmt->bindValue(2, $_POST["senha"]);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {

            $login_encontrado = true;

            $this->usuario = new Usuario(
                $row['cpf'], $row['email'], $row['nome'], $row['rg'], 
                $row['celular1'], $row['celular2'], $row['senha'], $row['cartao'] 
            );

        } 

        if($login_encontrado){


            // este return "<script type = 'text/javascript' >alert('Usuário encontrado !')</script>";

            //return new Usuario($row['cpf'],$row['email'], $row['nome'], $row['rg'], $row['celular1'], $row['celular2'], $row['senha'], $row['cartao']);

        } else {


            // este return "<script type = 'text/javascript' >alert('Usuário não encontrado !')</script>";

        }
        
        return $login_encontrado;
    }

    public function getUsuarioLogado(){

        $this->buscaPorCPF();

        return $this->usuario;

    }

    public function removePorCPFSelecionado($cpf) {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE cpf = :cpf";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(':cpf', $cpf);

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

}
?>