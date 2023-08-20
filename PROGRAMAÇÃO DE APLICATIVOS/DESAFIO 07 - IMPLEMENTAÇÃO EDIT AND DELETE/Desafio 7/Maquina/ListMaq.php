<?php
require_once("Conn.php");
class ListMaq extends Conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_Maq = "SELECT id, tamanho, cor, peso, preco, tipo FROM maquina ORDER BY id DESC LIMIT 40";
        $result_Maq = $this->conn->prepare($query_Maq);
        $result_Maq->execute();
        $retorno = $result_Maq->fetchAll();
        return $retorno;
    }
}
