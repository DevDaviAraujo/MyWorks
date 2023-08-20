<?php

require_once('..//Conn//conn.php');

 class estante extends conn {

    public object $conn;
    public array $formData;
    public int $id;
    
    public function create(): bool
    {
        
        $this->conn = $this->connect();
        $query_estante = "INSERT INTO estante (dimensao, cor, marca, modelo, material, peso, preco, descricao) VALUES (:dimensao, :cor, :marca, :modelo, :material, :peso, :preco, :descricao)";
        $add_estante = $this->conn->prepare($query_estante);
        $add_estante->bindParam(':dimensao', $this->formData['dimensao']);
        $add_estante->bindParam(':cor', $this->formData['cor']);
        $add_estante->bindParam(':marca', $this->formData['marca']);
        $add_estante->bindParam(':modelo', $this->formData['marca']);
        $add_estante->bindParam(':material', $this->formData['material']);
        $add_estante->bindParam(':peso', $this->formData['peso']);
        $add_estante->bindParam(':preco', $this->formData['preco']);
        $add_estante->bindParam(':descricao', $this->formData['descricao']);
        $add_estante->execute();

        if ($add_estante->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit() : bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_estante = "UPDATE estante SET id=:id, dimensao=:dimensao, cor=:cor, marca=:marca, modelo=:modelo, material=:material, quantidadepernas=:quantidadepernas, peso=:peso, descricao=:descricao, preco=:preco WHERE id=:id";
        $edit_estante = $this->conn->prepare($query_estante);
        $edit_estante->bindParam(':id', $this->formData['id']);
        $edit_estante->bindParam(':dimensao', $this->formData['dimensao']);
        $edit_estante->bindParam(':cor', $this->formData['cor']); 
        $edit_estante->bindParam(':marca', $this->formData['marca']);
        $edit_estante->bindParam(':modelo', $this->formData['modelo']);
        $edit_estante->bindParam(':material', $this->formData['material']);
        $edit_estante->bindParam(':quantidadepernas', $this->formData['quantidadepernas']);
        $edit_estante->bindParam(':peso', $this->formData['peso']);
        $edit_estante->bindParam(':descricao', $this->formData['descricao']);
        $edit_estante->bindParam(':preco', $this->formData['preco']);
        $edit_estante->execute();

        if($edit_estante->rowCount()){
            return true;
        }else{
            return false;
        }

    }
    public function delete():bool{
        $this->conn = $this->connect();
        $query_estante = "DELETE from estante WHERE id=:id";
        $delete_estante = $this->conn->prepare($query_estante);
        $delete_estante->bindParam(':id',$this->id);
        $value = $delete_estante->execute();
        return $value;
    }

    public function view()
    {
        $this->conn = $this->connect();
        $query_sofa = "SELECT id, dimensao, cor, marca, modelo, material, quantidadepernas, peso, descricao, preco FROM estante WHERE id =:id LIMIT 1";
        $result_sofa = $this->conn->prepare($query_sofa);
        $result_sofa->bindParam(':id', $this->id);
        $result_sofa->execute();
        $value = $result_sofa->fetch();
        return $value;
    }

}


?>