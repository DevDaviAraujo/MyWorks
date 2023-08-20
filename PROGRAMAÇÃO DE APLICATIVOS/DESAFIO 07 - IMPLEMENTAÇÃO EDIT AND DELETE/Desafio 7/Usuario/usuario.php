<?php
    require("conn.php");
    class usuario extends conn
    {

    public object $conn;
    public array $formData;

    public function create(){
        $this->conn = $this->connect();
        $query="INSERT INTO usuario(nome, email, senha) VALUES (:nome,:email,:senha)";
        $addusuario=$this->conn->prepare($query);
        $addusuario->bindParam(':nome',$this->formData['nome']);
        $addusuario->bindParam(':email',$this->formData['email']);
        $addusuario->bindParam(':senha',$this->formData['senha']);

        $addusuario->execute();
        //Validação
        if($addusuario->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }
}

?>