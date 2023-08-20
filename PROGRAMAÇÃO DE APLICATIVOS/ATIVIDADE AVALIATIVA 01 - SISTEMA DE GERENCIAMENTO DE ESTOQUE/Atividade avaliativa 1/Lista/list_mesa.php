<?php
require_once("..//Conn/conn.php");
class Listmesa extends Conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_mesa = "SELECT id, dimensao, cor, marca ,modelo, material, quantidadepernas, peso, preco, descricao FROM mesa ORDER BY id DESC LIMIT 40";
        $result_mesa = $this->conn->prepare($query_mesa);
        $result_mesa->execute();
        $retorno = $result_mesa->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}