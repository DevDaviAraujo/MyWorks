<?php
//variaveis utilizadas para efetuar a conexão com o banco de dados 
$usuario = "root";
$senha = "";
// Nome do banco de dados
$database= "estoquemobilia";
$host = "localhost";
$mysqli = new mysqli($host,$usuario, $senha, $database);
// Se não for possivel a conexão ao banco, condição que mostra "falha ao conectar com o banco de dados: " se caso ouver erro
if($mysqli->error) {
    die ("falha ao conectar com o banco de dados: " . $mysqli->error);
}
?>