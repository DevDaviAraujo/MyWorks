<?php

require_once('Conta.php');
require_once('ContaPFcorrente.php');

$ContaPFcorrente = new ContaPFcorrente;

$ContaPFcorrente->setNumero(1238);
$ContaPFcorrente->setAgencia(46);
$ContaPFcorrente->setTitular('Marcos Vieria da Silva Pontes');
$ContaPFcorrente->setCartao('4312-9497-3000-0943');
$ContaPFcorrente->setCheque(2);
$ContaPFcorrente->setSaque(1.50);
$ContaPFcorrente->setDeposito(20000);
$ContaPFcorrente->setTransferencia(500);



echo "<p> numero: {$ContaPFcorrente->getnumero()} </p>";
echo "<p> agencia: {$ContaPFcorrente->getagencia()} </p>";
echo "<p> titular: {$ContaPFcorrente->getTitular()} </p>";
echo "<p> saldo: {$ContaPFcorrente->getSaldo()} </p>";
echo "<p> cartao: {$ContaPFcorrente->getCartao()} </p>";
echo "<p> cheque: {$ContaPFcorrente->getCheque()} </p>";
echo "<p> extrato: </p>";
echo "<p> saque: {$ContaPFcorrente->getSaque()} </p>";
echo "<p> deposito: {$ContaPFcorrente->getDeposito()} </p>";
echo "<p> transferencia: {$ContaPFcorrente->getTransferencia()} </p>";

?>