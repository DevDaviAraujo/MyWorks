<?php

require("comunicacao.php");

class joaootario extends comunicacao{

    public object $comunicacao;
    public array $formData;
    public function create(){

        $this->comunicacao = $this->connect();
        $query = "INSERT INTO computador(tamanho,cor,memoria,processador,placamae,fontealimentacao,tipos) VALUES (:tamanho,:cor,:memoria,:processador,:placamae,:fontealimentacao,:tipos)"; 
        $addComputador=$this->comunicacao->prepare($query);
        $addComputador->bindParam(':tamanho',$this->formData['tamanho']);
        $addComputador->bindParam(':cor',$this->formData['cor']);
        $addComputador->bindParam(':memoria',$this->formData['memoria']);
        $addComputador->bindParam(':processador',$this->formData['processador']);
        $addComputador->bindParam(':placamae',$this->formData['placamae']);
        $addComputador->bindParam(':fontealimentacao',$this->formData['fonte']);
        $addComputador->bindParam(':tipos',$this->formData['tipos']);
        $addComputador->execute();

        if($addComputador->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

}