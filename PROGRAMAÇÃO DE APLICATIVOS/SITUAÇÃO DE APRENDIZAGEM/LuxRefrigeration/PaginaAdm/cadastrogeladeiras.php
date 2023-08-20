<?php

require_once('..//conn//conn.php');

class geladeira extends conn{

    public object $conn;
    public array $formData;
    public int $id;
    
    public function create(): bool
    {
        
        $this->conn = $this->connect();
        $query_geladeira = "INSERT INTO geladeira(codigo,marca, fabricante, dimensao,capacidade,tipo,peso,voltagem,cor,consumo,portas,prateleiras,tipoprateleiras,preco,quantidade,quantidademin) VALUES(:codigo,:marca, :fabricante, :dimensao,:capacidade,:tipo,:peso,:voltagem,:cor,:consumo,:portas,:prateleiras,:tipoprateleiras,:preco,:quantidade,:quantidademin)";
        $add_geladeira = $this->conn->prepare($query_geladeira);
        $add_geladeira->bindParam(':codigo', $this->formData['codigo']);
        $add_geladeira->bindParam(':marca', $this->formData['marca']);
        $add_geladeira->bindParam(':fabricante', $this->formData['fabricante']);
        $add_geladeira->bindParam(':dimensao', $this->formData['dimensao']);
        $add_geladeira->bindParam(':capacidade', $this->formData['capacidade']);
        $add_geladeira->bindParam(':tipo', $this->formData['tipo']);
        $add_geladeira->bindParam(':peso', $this->formData['peso']);
        $add_geladeira->bindParam(':voltagem', $this->formData['voltagem']);
        $add_geladeira->bindParam(':cor', $this->formData['cor']);
        $add_geladeira->bindParam(':consumo', $this->formData['consumo']);
        $add_geladeira->bindParam(':portas', $this->formData['portas']);
        $add_geladeira->bindParam(':prateleiras', $this->formData['prateleiras']);
        $add_geladeira->bindParam(':tipoprateleiras', $this->formData['tipoprateleiras']);
        $add_geladeira->bindParam(':preco', $this->formData['preco']);
        $add_geladeira->bindParam(':codigo', $this->formData['codigo']);
        $add_geladeira->bindParam(':quantidade', $this->formData['quantidade']);
        $add_geladeira->bindParam(':quantidademin', $this->formData['quantidademin']);
        
        
        $add_geladeira->execute();

        if ($add_geladeira->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit() : bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_geladeira = "UPDATE geladeira SET codigo=:codigo,marca=:marca, fabricante=:fabricante, dimensao=:dimensao, capacidade=:capacidade, tipo=:tipo, peso=:peso, voltagem=:voltagem, cor=:cor, consumo=:consumo,portas=:portas, prateleiras=:prateleiras, tipoprateleiras=:tipoprateleiras, preco=:preco, quantidade=:quantidade, quantidademin=:quantidademin WHERE codigo=:codigo";
        $edit_geladeira = $this->conn->prepare($query_geladeira);
        $edit_geladeira->bindParam(':codigo', $this->formData['codigo']);
        $edit_geladeira->bindParam(':marca', $this->formData['marca']);
        $edit_geladeira->bindParam(':fabricante', $this->formData['fabricante']);
        $edit_geladeira->bindParam(':dimensao', $this->formData['dimensao']);
        $edit_geladeira->bindParam(':capacidade', $this->formData['capacidade']);
        $edit_geladeira->bindParam(':tipo', $this->formData['tipo']);
        $edit_geladeira->bindParam(':peso', $this->formData['peso']);
        $edit_geladeira->bindParam(':voltagem', $this->formData['voltagem']);
        $edit_geladeira->bindParam(':cor', $this->formData['cor']);
        $edit_geladeira->bindParam(':consumo', $this->formData['consumo']);
        $edit_geladeira->bindParam(':portas', $this->formData['portas']);
        $edit_geladeira->bindParam(':prateleiras', $this->formData['prateleiras']);
        $edit_geladeira->bindParam(':tipoprateleiras', $this->formData['tipoprateleiras']);
        $edit_geladeira->bindParam(':preco', $this->formData['preco']);
        $edit_geladeira->bindParam(':quantidade', $this->formData['quantidade']);
        $edit_geladeira->bindParam(':quantidademin', $this->formData['quantidademin']);

        $edit_geladeira->execute();

        if($edit_geladeira->rowCount()){
            return true;
        }else{
            return false;
        }

    }

    public function delete():bool{
        $this->conn = $this->connect();
        $query_geladeira = "DELETE from geladeira WHERE codigo=:codigo";
        $delete_geladeira = $this->conn->prepare($query_geladeira);
        $delete_geladeira->bindParam(':codigo',$this->id);
        $value = $delete_geladeira->execute();
        return $value;
    }
    public function view()
    {
        $this->conn = $this->connect();
        $query_geladeira = "SELECT codigo,marca, fabricante, dimensao,capacidade,tipo,peso,voltagem,cor,consumo,portas,prateleiras,tipoprateleiras,preco,quantidade,quantidademin FROM geladeira WHERE codigo =:codigo LIMIT 1";
        $result_geladeira = $this->conn->prepare($query_geladeira);
        $result_geladeira->bindParam(':codigo', $this->id);
        $result_geladeira->execute();
        $value = $result_geladeira->fetch();
        return $value;
    }

}


?>