<?php
    require("conn.php");
    class user extends conn
    {

    public object $conn;
    public array $formData;

    public function create(){
        $this->conn = $this->connect();
        $query="INSERT INTO celular(tamanho, cor, marca, modelo, preco, categoria) VALUES (:tamanho,:cor,:marca, :modelo, :preco, :categoria)";
        $addcelular=$this->conn->prepare($query);
        $addcelular->bindParam(':tamanho',$this->formData['tamanho']);
        $addcelular->bindParam(':cor',$this->formData['cor']);
        $addcelular->bindParam(':marca',$this->formData['marca']);
        $addcelular->bindParam(':modelo',$this->formData['modelo']);
        $addcelular->bindParam(':preco',$this->formData['preco']);
        $addcelular->bindParam(':categoria',$this->formData['categoria']);

        $addcelular->execute();
        //Validação
        if($addcelular->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }
}

?>