<?php
require_once("..//Conn/conn.php");
class Listsofa extends Conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_sofa = "SELECT id, dimensao, cor, marca, modelo, material, peso, preco, lugares, descricao FROM sofa ORDER BY id DESC LIMIT 40";
        $result_sofa = $this->conn->prepare($query_sofa);
        $result_sofa->execute();
        $retorno = $result_sofa->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}