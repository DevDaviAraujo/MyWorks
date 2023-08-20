<?php

require_once('..//Conn//conn.php');

 class sofa extends conn {

    public object $conn;
    public array $formData;
    public int $id;
    
    public function create(): bool
    {
        
        $this->conn = $this->connect();
        $query_sofa = "INSERT INTO sofa (dimensao, cor, marca, modelo, material, peso, preco, lugares, descricao) VALUES (:dimensao, :cor, :marca, :modelo, :material, :peso, :preco, :lugares, :descricao)";
        $add_sofa = $this->conn->prepare($query_sofa);
        $add_sofa->bindParam(':dimensao', $this->formData['dimensao']);
        $add_sofa->bindParam(':cor', $this->formData['cor']);
        $add_sofa->bindParam(':marca', $this->formData['marca']);
        $add_sofa->bindParam(':modelo', $this->formData['modelo']);
        $add_sofa->bindParam(':material', $this->formData['material']);
        $add_sofa->bindParam(':peso', $this->formData['peso']);
        $add_sofa->bindParam(':preco', $this->formData['preco']);
        $add_sofa->bindParam(':lugares', $this->formData['lugares']);
        $add_sofa->bindParam(':descricao', $this->formData['descricao']);
        $add_sofa->execute();

        if ($add_sofa->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit() : bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_sofa = "UPDATE sofa SET id=:id, dimensao=:dimensao, cor=:cor, marca=:marca, modelo=:modelo, material=:material, peso=:peso, lugares=:lugares, descricao=:descricao, preco=:preco WHERE id=:id";
        $edit_sofa = $this->conn->prepare($query_sofa);
        $edit_sofa->bindParam(':id', $this->formData['id']);
        $edit_sofa->bindParam(':dimensao', $this->formData['dimensao']);
        $edit_sofa->bindParam(':cor', $this->formData['cor']); 
        $edit_sofa->bindParam(':marca', $this->formData['marca']);
        $edit_sofa->bindParam(':modelo', $this->formData['modelo']);
        $edit_sofa->bindParam(':material', $this->formData['material']);
        $edit_sofa->bindParam(':peso', $this->formData['peso']);
        $edit_sofa->bindParam(':lugares', $this->formData['lugares']);
        $edit_sofa->bindParam(':descricao', $this->formData['descricao']);
        $edit_sofa->bindParam(':preco', $this->formData['preco']);
        $edit_sofa->execute();

        if($edit_sofa->rowCount()){
            return true;
        }else{
            return false;
        }

    }
    public function delete():bool{
        $this->conn = $this->connect();
        $query_sofa = "DELETE from sofa WHERE id=:id";
        $delete_sofa = $this->conn->prepare($query_sofa);
        $delete_sofa->bindParam(':id',$this->id);
        $value = $delete_sofa->execute();
        return $value;
    }

    public function view()
    {
        $this->conn = $this->connect();
        $query_sofa = "SELECT id, dimensao, cor, marca, modelo, material, peso, lugares, descricao, preco FROM sofa WHERE id =:id LIMIT 1";
        $result_sofa = $this->conn->prepare($query_sofa);
        $result_sofa->bindParam(':id', $this->id);
        $result_sofa->execute();
        $value = $result_sofa->fetch();
        return $value;
    }

}


?>