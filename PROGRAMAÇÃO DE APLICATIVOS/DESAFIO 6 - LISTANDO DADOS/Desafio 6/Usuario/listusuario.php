<?php
require_once("conn.php");
class listusuario extends conn
{
    public object $conn;

    public function list() :array
    {
        $this->conn = $this->connect();
        $query_usuario = "SELECT nome, email, senha FROM usuario ORDER BY id DESC LIMIT 40";
        $result_usuario = $this->conn->prepare($query_usuario);
        $result_usuario->execute();
        $retorno = $result_usuario->fetchAll();
        return $retorno;
    }
}