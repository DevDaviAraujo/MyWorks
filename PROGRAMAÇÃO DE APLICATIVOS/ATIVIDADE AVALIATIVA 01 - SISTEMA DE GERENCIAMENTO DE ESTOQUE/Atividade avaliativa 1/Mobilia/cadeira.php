<?php

require_once('..//Conn//conn.php');

class cadeira extends conn{
    public object $conn;
    public array $formData;
    public int $id;

    public function create(): bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_cadeira = "INSERT INTO cadeira (dimensao, cor, marca ,modelo, material, quantidadepernas, peso, preco, descricao) VALUES (:dimensao, :cor, :marca, :modelo, :material, :quantidadepernas, :peso, :preco, :descricao)";
        $add_cadeira = $this->conn->prepare($query_cadeira);
        $add_cadeira->bindParam(':dimensao', $this->formData['dimensao']);
        $add_cadeira->bindParam(':cor', $this->formData['cor']);
        $add_cadeira->bindParam(':marca', $this->formData['marca']);
        $add_cadeira->bindParam(':modelo', $this->formData['modelo']);
        $add_cadeira->bindParam(':material', $this->formData['material']);
        $add_cadeira->bindParam(':quantidadepernas', $this->formData['quantidadepernas']);
        $add_cadeira->bindParam(':peso', $this->formData['peso']);
        $add_cadeira->bindParam(':preco', $this->formData['preco']);
        $add_cadeira->bindParam(':descricao', $this->formData['descricao']);

        $add_cadeira->execute();

        if ($add_cadeira->rowCount()) {
            return true;
        } else {
            return false;
        }
    }
    public function edit() : bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_cadeira = "UPDATE cadeira SET id=:id, dimensao=:dimensao, cor=:cor, marca=:marca, modelo=:modelo, material=:material, quantidadepernas=:quantidadepernas, peso=:peso, descricao=:descricao, preco=:preco WHERE id=:id";
        $edit_cadeira = $this->conn->prepare($query_cadeira);
        $edit_cadeira->bindParam(':id', $this->formData['id']);
        $edit_cadeira->bindParam(':dimensao', $this->formData['dimensao']);
        $edit_cadeira->bindParam(':cor', $this->formData['cor']); 
        $edit_cadeira->bindParam(':marca', $this->formData['marca']);
        $edit_cadeira->bindParam(':modelo', $this->formData['modelo']);
        $edit_cadeira->bindParam(':material', $this->formData['material']);
        $edit_cadeira->bindParam(':quantidadepernas', $this->formData['quantidadepernas']);
        $edit_cadeira->bindParam(':peso', $this->formData['peso']);
        $edit_cadeira->bindParam(':descricao', $this->formData['descricao']);
        $edit_cadeira->bindParam(':preco', $this->formData['preco']);
        $edit_cadeira->execute();

        if($edit_cadeira->rowCount()){
            return true;
        }else{
            return false;
        }

    }
    public function delete():bool{
        $this->conn = $this->connect();
        $query_cadeira = "DELETE from cadeira WHERE id=:id";
        $delete_cadeira = $this->conn->prepare($query_cadeira);
        $delete_cadeira->bindParam(':id',$this->id);
        $value = $delete_cadeira->execute();
        return $value;
    }

    public function view()
    {
        $this->conn = $this->connect();
        $query_sofa = "SELECT id, dimensao, cor, marca, modelo, material, quantidadepernas, peso, descricao, preco FROM cadeira WHERE id =:id LIMIT 1";
        $result_sofa = $this->conn->prepare($query_sofa);
        $result_sofa->bindParam(':id', $this->id);
        $result_sofa->execute();
        $value = $result_sofa->fetch();
        return $value;
    }
}
?>