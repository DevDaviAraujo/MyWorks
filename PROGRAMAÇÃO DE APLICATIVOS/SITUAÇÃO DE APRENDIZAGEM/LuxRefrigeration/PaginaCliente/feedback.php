<?php

require_once("..//conn//conn.php");

class contato extends conn
{
    public object $conn;
    public array $formData;
    public int $id;

    public function list(): array
    {
        $this->conn = $this->connect();
        $query_users = "SELECT id, nome, email, assunto, mensagem FROM contato ORDER BY id DESC LIMIT 40";
        $result_users = $this->conn->prepare($query_users);
        $result_users->execute();
        $retorno = $result_users->fetchAll();
        return $retorno;
    }

    public function create(): bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_contato = "INSERT INTO contato (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)";
        $add_contato = $this->conn->prepare($query_contato);
        $add_contato->bindParam(':nome', $this->formData['nome']);
        $add_contato->bindParam(':email', $this->formData['email']);
        $add_contato->bindParam(':assunto', $this->formData['assunto']);
        $add_contato->bindParam(':mensagem', $this->formData['mensagem']);
        $add_contato->execute();

        if ($add_contato->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function view()
    {
        $this->conn = $this->connect();
        $query_user = "SELECT id, nome, email, assunto, mensagem FROM contato WHERE id =:id LIMIT 1";
        $result_user = $this->conn->prepare($query_user);
        $result_user->bindParam(':id', $this->id);
        $result_user->execute();
        $value = $result_user->fetch();
        return $value;
    }

}

?>