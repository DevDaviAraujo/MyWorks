<?php

require_once('..//Conn//conn.php');

class mesa extends conn
{
    public object $conn;
    public array $formData;
    public int $id;

    public function create(): bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_mesa = "INSERT INTO mesa (dimensao, cor, marca ,modelo, material, quantidadepernas, peso, preco, descricao) VALUES (:dimensao, :cor, :marca, :modelo, :material, :quantidadepernas, :peso, :preco,:descricao)";
        $add_mesa = $this->conn->prepare($query_mesa);
        $add_mesa->bindParam(':dimensao', $this->formData['dimensao']);
        $add_mesa->bindParam(':cor', $this->formData['cor']);
        $add_mesa->bindParam(':marca', $this->formData['marca']);
        $add_mesa->bindParam(':modelo', $this->formData['modelo']);
        $add_mesa->bindParam(':material', $this->formData['material']);
        $add_mesa->bindParam(':quantidadepernas', $this->formData['quantidadepernas']);
        $add_mesa->bindParam(':peso', $this->formData['peso']);
        $add_mesa->bindParam(':preco', $this->formData['preco']);
        $add_mesa->bindParam(':descricao', $this->formData['descricao']);

        $add_mesa->execute();

        if ($add_mesa->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit() : bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_mesa = "UPDATE mesa SET id=:id, dimensao=:dimensao, cor=:cor, marca=:marca, modelo=:modelo, material=:material, quantidadepernas=:quantidadepernas, peso=:peso, descricao=:descricao, preco=:preco WHERE id=:id";
        $edit_mesa = $this->conn->prepare($query_mesa);
        $edit_mesa->bindParam(':id', $this->formData['id']);
        $edit_mesa->bindParam(':dimensao', $this->formData['dimensao']);
        $edit_mesa->bindParam(':cor', $this->formData['cor']); 
        $edit_mesa->bindParam(':marca', $this->formData['marca']);
        $edit_mesa->bindParam(':modelo', $this->formData['modelo']);
        $edit_mesa->bindParam(':material', $this->formData['material']);
        $edit_mesa->bindParam(':quantidadepernas', $this->formData['quantidadepernas']);
        $edit_mesa->bindParam(':peso', $this->formData['peso']);
        $edit_mesa->bindParam(':descricao', $this->formData['descricao']);
        $edit_mesa->bindParam(':preco', $this->formData['preco']);
        $edit_mesa->execute();

        if($edit_mesa->rowCount()){
            return true;
        }else{
            return false;
        }

    }
    public function delete():bool{
        $this->conn = $this->connect();
        $query_mesa = "DELETE from mesa WHERE id=:id";
        $delete_mesa = $this->conn->prepare($query_mesa);
        $delete_mesa->bindParam(':id',$this->id);
        $value = $delete_mesa->execute();
        return $value;
    }

    public function view()
    {
        $this->conn = $this->connect();
        $query_mesa = "SELECT id, dimensao, cor, marca, modelo, material, quantidadepernas, peso, descricao, preco FROM mesa WHERE id =:id LIMIT 1";
        $result_mesa = $this->conn->prepare($query_mesa);
        $result_mesa->bindParam(':id', $this->id);
        $result_mesa->execute();
        $value = $result_mesa->fetch();
        return $value;
    }
}
?>