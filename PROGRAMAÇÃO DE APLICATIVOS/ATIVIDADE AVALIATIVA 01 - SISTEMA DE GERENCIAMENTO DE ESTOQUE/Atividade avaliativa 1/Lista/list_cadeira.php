<?php
require_once("..//Conn/conn.php");
class Listcadeira extends conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_cadeira = "SELECT id, dimensao, cor, marca ,modelo, material, quantidadepernas, peso, preco, descricao FROM cadeira ORDER BY id DESC LIMIT 40";
        $result_cadeira = $this->conn->prepare($query_cadeira);
        $result_cadeira->execute();
        $retorno = $result_cadeira->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}