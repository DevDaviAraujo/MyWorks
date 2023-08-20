<?php

require("comunicacao.php");

class usuario extends comunicacao{


    public object $comunicacao;
    public array $formData;
    public function create(){

        $this->comunicacao = $this->connect();
        $query = "INSERT INTO usuario(nome,senha,email) VALUES (:name,:password,:email)";
        $addUser=$this->comunicacao->prepare($query);
        $addUser->bindParam(':name', $this->formData['nome']);
        $addUser->bindParam(':password', $this->formData['senha']);
        $addUser->bindParam(':email', $this->formData['email']);
        $addUser->execute();

        if($addUser->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }

}

?>