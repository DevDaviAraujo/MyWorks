<?php
require_once("..//conn/conn.php");

class usuario extends conn{

    public object $conn;
    public array $formData;

    public function verificar(){
        $this->conn=$this->connect();
        $query2="SELECT * FROM usuario WHERE email='".$this->formData['email']."'";
        $verificausuario= $this->conn->prepare($query2);
        $verificausuario->execute();
        $value = $verificausuario->fetchAll();

        return $value;
     
    }

    public function create(){
        $this->conn=$this->connect();
        $query="INSERT INTO usuario(email, senha) VALUES(:email, :senha)";
        $addusuario= $this->conn->prepare($query);
        $addusuario->bindParam(':email', $this->formData['email']);
        $addusuario->bindParam(':senha', $this->formData['senha']);

        $addusuario->execute();

        if($addusuario->rowCount()){
            return true;
        }
        else{
            return false;
        }
    } 
}

?>