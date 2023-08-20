<?php

require_once('Computador.php');
require_once('Eletronicos.php');
require_once('Eletrodomesticos.php');



$computador = new Computador();

$computador->cor = "preto";
$computador->dimensao = 123.2;
$computador->gabinete = "preto";
$computador->CPU = "i5 12400f";
$computador->GPU = "RTX 3050 TI";
$computador->memoriaRAM = 16;
$computador->memoriaInterna = 512;
$computador->placaMae = "Asus";
$computador->fonte = 350;

echo "<h3> Computador </h3>";
echo "<p> Cor: $computador->cor </p>";
echo "<p> Dimensão: $computador->dimensao </p>";
echo "<p> Gabinete: $computador->gabinete </p>";
echo "<p> CPU: $computador->CPU </p>";
echo "<p> GPU: $computador->GPU </p>";
echo "<p> Mémoria RAM: $computador->memoriaRAM </p>";
echo "<p> Mémoria interna: $computador->memoriaInterna </p>";
echo "<p> Placa mãe: $computador->placaMae </p>";
echo "<p> Fonte : $computador->fonte </p>";

?>