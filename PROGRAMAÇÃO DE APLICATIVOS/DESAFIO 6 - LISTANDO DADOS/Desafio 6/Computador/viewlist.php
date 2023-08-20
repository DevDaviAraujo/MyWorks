
<?php
require_once("comunicacao.php");
class viewlist extends comunicacao
{
    public object $comunicacao;

    public function list() :array
    {
        $this->comunicacao = $this->connect();
        $query_Computador = "SELECT id, tamanho, cor, memoria, processador, placamae, fontealimentacao, tipos  FROM computador ORDER BY id DESC LIMIT 40";
        $result_Computador = $this->comunicacao->prepare($query_Computador);
        $result_Computador->execute();
        $retorno = $result_Computador->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }
}