<?php

abstract class Conta {
    private int $numero;
    private int $agencia;
    private string $titular;
    private float $saldo;
    private float $saque;
    private float $deposito;
    private float $transferencia;
    


    public function getNumero() {
        return $this->numero;
    }
    public function getAgencia() {
        return $this->agencia;
    }
    public function getTitular() {
        return $this->titular;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function getSaque() {
        return $this->saque;
    }
    public function getDeposito() {
        return $this->deposito;
    }
    public function getTransferencia() {
        return $this->transferencia;
    }
    public function getEmissao() {
        return $this->saque;
    }
    
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }
    public function setTitular($titular) {
        $this->titular = $titular;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function setSaque($saque) {
        $this->saque = $saque;
    }
    public function setDeposito($deposito) {
        $this->deposito = $deposito;
    }
    public function setTransferencia($transferencia) {
        $this->transferencia = $transferencia;
    }
}



?>