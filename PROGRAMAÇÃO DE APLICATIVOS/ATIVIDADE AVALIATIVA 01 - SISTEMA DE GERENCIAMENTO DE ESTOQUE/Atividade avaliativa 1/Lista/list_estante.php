<?php
require_once("..//Conn/conn.php");
class Listestante extends Conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_estante = "SELECT id, dimensao, cor, marca, modelo, material, peso, preco, descricao FROM estante ORDER BY id DESC LIMIT 40";
        $result_estante = $this->conn->prepare($query_estante);
        $result_estante->execute();
        $retorno = $result_estante->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}