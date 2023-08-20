<?php
require_once("conexao.php");
class ListContato extends conexao {
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_contato = "SELECT id, nome, email, assunto, mensagem FROM contato ORDER BY id DESC LIMIT 40";
        $result_contato = $this->conn->prepare($query_contato);
        $result_contato->execute();
        $retorno = $result_contato->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}