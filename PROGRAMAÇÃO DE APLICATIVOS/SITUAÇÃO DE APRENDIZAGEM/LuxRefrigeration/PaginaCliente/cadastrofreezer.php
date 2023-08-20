<?php

require_once('..//conn//conn.php');

class freezer extends conn{

    public object $conn;
    public array $formData;
    public int $id;
    
    public function create(): bool
    {
        
        $this->conn = $this->connect();
        $query_freezer = "INSERT INTO freezer (codigo,marca, fabricante, dimensao,capacidade,tipo,peso,voltagem,cor,consumo,portas,prateleiras,tipoprateleiras, congelamentorapido, controletemperatura, ambiente, duplafuncao, gavetas,preco,quantidade,quantidademin) VALUES(:codigo,:marca, :fabricante, :dimensao,:capacidade,:tipo,:peso,:voltagem,:cor,:consumo,:portas,:prateleiras,:tipoprateleiras,:congelamentorapido,:controletemperatura,:ambiente,:duplafuncao,:gavetas,:preco,:quantidade,:quantidademin)";
        $add_freezer = $this->conn->prepare($query_freezer);
        $add_freezer->bindParam(':codigo', $this->formData['codigo']);
        $add_freezer->bindParam(':marca', $this->formData['marca']);
        $add_freezer->bindParam(':fabricante', $this->formData['fabricante']);
        $add_freezer->bindParam(':dimensao', $this->formData['dimensao']);
        $add_freezer->bindParam(':capacidade', $this->formData['capacidade']);
        $add_freezer->bindParam(':tipo', $this->formData['tipo']);
        $add_freezer->bindParam(':peso', $this->formData['peso']);
        $add_freezer->bindParam(':voltagem', $this->formData['voltagem']);
        $add_freezer->bindParam(':cor', $this->formData['cor']);
        $add_freezer->bindParam(':consumo', $this->formData['consumo']);
        $add_freezer->bindParam(':portas', $this->formData['portas']);
        $add_freezer->bindParam(':prateleiras', $this->formData['prateleiras']);
        $add_freezer->bindParam(':tipoprateleiras', $this->formData['tipoprateleiras']);
        $add_freezer->bindParam(':congelamentorapido', $this->formData['congelamentorapido']);
        $add_freezer->bindParam(':controletemperatura', $this->formData['controletemperatura']);
        $add_freezer->bindParam(':ambiente', $this->formData['ambiente']);
        $add_freezer->bindParam(':duplafuncao', $this->formData['duplafuncao']);
        $add_freezer->bindParam(':gavetas', $this->formData['gavetas']);
        $add_freezer->bindParam(':preco', $this->formData['preco']);
        $add_freezer->bindParam(':codigo', $this->formData['codigo']);
        $add_freezer->bindParam(':quantidade', $this->formData['quantidade']);
        $add_freezer->bindParam(':quantidademin', $this->formData['quantidademin']);
        
        
        $add_freezer->execute();

        if ($add_freezer->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit() : bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_freezer = "UPDATE freezer SET codigo=:codigo,marca=:marca, fabricante=:fabricante, dimensao=:dimensao, capacidade=:capacidade, tipo=:tipo, peso=:peso, voltagem=:voltagem, cor=:cor, consumo=:consumo,portas=:portas, prateleiras=:prateleiras, tipoprateleiras=:tipoprateleiras, congelamentorapido=:congelamentorapido, controletemperatura=:controletemperatura,  ambiente=:ambiente, duplafuncao=:duplafuncao, gavetas=:gavetas, preco=:preco, quantidade=:quantidade, quantidademin=:quantidademin WHERE codigo=:codigo";
        $edit_freezer = $this->conn->prepare($query_freezer);
        $edit_freezer->bindParam(':codigo', $this->formData['codigo']);
        $edit_freezer->bindParam(':marca', $this->formData['marca']);
        $edit_freezer->bindParam(':fabricante', $this->formData['fabricante']);
        $edit_freezer->bindParam(':dimensao', $this->formData['dimensao']);
        $edit_freezer->bindParam(':capacidade', $this->formData['capacidade']);
        $edit_freezer->bindParam(':tipo', $this->formData['tipo']);
        $edit_freezer->bindParam(':peso', $this->formData['peso']);
        $edit_freezer->bindParam(':voltagem', $this->formData['voltagem']);
        $edit_freezer->bindParam(':cor', $this->formData['cor']);
        $edit_freezer->bindParam(':consumo', $this->formData['consumo']);
        $edit_freezer->bindParam(':portas', $this->formData['portas']);
        $edit_freezer->bindParam(':prateleiras', $this->formData['prateleiras']);
        $edit_freezer->bindParam(':tipoprateleiras', $this->formData['tipoprateleiras']);
        $edit_freezer->bindParam(':congelamentorapido', $this->formData['congelamentorapido']);
        $edit_freezer->bindParam(':controletemperatura', $this->formData['controletemperatura']);
        $edit_freezer->bindParam(':ambiente', $this->formData['ambiente']);
        $edit_freezer->bindParam(':duplafuncao', $this->formData['duplafuncao']);
        $edit_freezer->bindParam(':gavetas', $this->formData['gavetas']);
        $edit_freezer->bindParam(':preco', $this->formData['preco']);
        $edit_freezer->bindParam(':quantidade', $this->formData['quantidade']);
        $edit_freezer->bindParam(':quantidademin', $this->formData['quantidademin']);
        

        $edit_freezer->execute();

        if($edit_freezer->rowCount()){
            return true;
        }else{
            return false;
        }

    }

    public function delete():bool{
        $this->conn = $this->connect();
        $query_freezer = "DELETE from freezer WHERE codigo=:codigo";
        $delete_freezer = $this->conn->prepare($query_freezer);
        $delete_freezer->bindParam(':codigo',$this->id);
        $value = $delete_freezer->execute();
        return $value;
    }
    public function view()
    {
        $this->conn = $this->connect();
        $query_freezer = "SELECT codigo,marca, fabricante, dimensao,capacidade,tipo,peso,voltagem,cor,consumo,portas,prateleiras,tipoprateleiras, congelamentorapido, controletemperatura, ambiente, duplafuncao, gavetas,preco,quantidade,quantidademin FROM freezer WHERE codigo =:codigo LIMIT 1";
        $result_freezer = $this->conn->prepare($query_freezer);
        $result_freezer->bindParam(':codigo', $this->id);
        $result_freezer->execute();
        $value = $result_freezer->fetch();
        return $value;
    }


}


?>