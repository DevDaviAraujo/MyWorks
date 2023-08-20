<?php
require_once("conn.php");
class ListCelular extends conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_celular = "SELECT id, tamanho, cor, marca, modelo, preco, categoria FROM celular ORDER BY id DESC LIMIT 40";
        $result_celular = $this->conn->prepare($query_celular);
        $result_celular->execute();
        $retorno = $result_celular->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}