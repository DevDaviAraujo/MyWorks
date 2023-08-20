
<?php
require_once("comunicacao.php");
class viewlist extends comunicacao
{
    public object $comunicacao;

    public function list() :array
    {
        $this->comunicacao = $this->connect();
        $query_Computador = "SELECT id, tamanho, cor, memoria, processador, placamae, fontealimentacao, tipos  FROM computador where id=:id limit 1";
        $result_Computador = $this->connect->prepare($query_Computador);
        $result_Computador->bindParam(':id', $this->id);
        $result_Computador->execute();
        $value = $result_Computador->fetch();
        return $value;
    }

   
}