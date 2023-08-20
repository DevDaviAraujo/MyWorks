<?php
require_once("..//conn/conn.php");
class listfreezer extends conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_freezer = "SELECT codigo,marca, fabricante, dimensao,capacidade,tipo,peso,voltagem,cor,consumo,portas,prateleiras,tipoprateleiras, congelamentorapido, controletemperatura, ambiente, duplafuncao, gavetas,preco,quantidade,quantidademin  FROM freezer ORDER BY codigo DESC LIMIT 40";
        $result_freezer = $this->conn->prepare($query_freezer);
        $result_freezer->execute();
        $retorno = $result_freezer->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}