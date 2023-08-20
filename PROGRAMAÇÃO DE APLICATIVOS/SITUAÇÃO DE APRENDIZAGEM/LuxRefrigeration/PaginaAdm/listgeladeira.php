<?php
require_once("..//conn/conn.php");
class listgeladeira extends conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_geladeira = "SELECT codigo, marca, fabricante, dimensao, capacidade, tipo, peso, voltagem, cor, consumo, portas, prateleiras, tipoprateleiras, preco, quantidade,quantidademin  FROM geladeira ORDER BY codigo DESC LIMIT 40";
        $result_geladeira = $this->conn->prepare($query_geladeira);
        $result_geladeira->execute();
        $retorno = $result_geladeira->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}