<?php

class usuario extends conn2 {

    public object $conn;
    public array $formData;
    public int $id;
    
    public function create(): bool
    {
        
        $this->conn = $this->connect();
        $query_usuario = "INSERT INTO usuario (email, senha) VALUES (:email, :senha)";
        $add_usuario = $this->conn->prepare($query_usuario);
        $add_usuario->bindParam(':email', $this->formData['email']);
        $add_usuario->bindParam(':senha', $this->formData['senha']);
        
        $add_usuario->execute();

        if ($add_usuario->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

}


?>