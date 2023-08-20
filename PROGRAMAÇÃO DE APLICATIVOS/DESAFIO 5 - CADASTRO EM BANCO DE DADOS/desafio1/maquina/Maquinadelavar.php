<?php
    require_once("Conn.php");
    class Maq extends Conn
    {
    public object $conn;
    public array $formData;

    public function create(){
        $this->conn = $this->connect();
        $query="INSERT INTO maquina(tamanho,cor,peso,preco,tipo) VALUES (:tamanho,:cor,:peso,:preco,:tipo)";
        $addMaq=$this->conn->prepare($query);
        $addMaq->bindParam(':tamanho',$this->formData['tamanho']);
        $addMaq->bindParam(':cor',$this->formData['cor']);
        $addMaq->bindParam(':peso',$this->formData['peso']);
        $addMaq->bindParam(':preco',$this->formData['preco']);
        $addMaq->bindParam(':tipo',$this->formData['tipo']);
        
        $addMaq->execute();
        if($addMaq->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }
}
?>