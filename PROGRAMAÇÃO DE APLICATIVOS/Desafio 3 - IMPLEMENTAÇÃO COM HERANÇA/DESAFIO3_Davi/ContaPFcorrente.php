<?php

require_once('Conta.php');

class ContaPFcorrente extends Conta

{
    private int $numero;
    private int $agencia;
    private string $titular;
    private float $saldo;
    private string $cartao;
    private int $cheque;
    private float $saque;
    private float $deposito;
    private float $transferencia;

    public function getnumero() {
        return $this->numero;
    }
    public function getagencia() {
        return $this->agencia;
    }
    public function gettitular() {
        return $this->titular;
    }

    public function getCartao() {
        return $this->cartao;
    }
    public function getCheque() {
        return $this->cheque;
    }    
    public function getSaque(){
        return $this->saque;
    }
    public function getDeposito(){
        return $this->deposito;
    }
    public function getTransferencia(){
        return $this->transferencia;
    }
     public function getSaldo() {
        return $this->saldo = $this->deposito - $this->saque - $this->transferencia;
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
    public function setSaque($saque) {
        return $this->saque = $saque;
    }
    public function setDeposito($deposito) {
        return $this->deposito = $deposito;
    }
    
    public function setTransferencia($transferencia) {
        return $this->transferencia = $transferencia;
    }
    public function setSaldo($saldo) {
        $this->saldo = $this->saldo + $deposito - $saque - $transferencia;
    }
    public function setCartao($cartao) {
        $this->cartao = $cartao;
    }
    public function setCheque($cheque) {
        $this->cheque = $cheque;
    }
    
}



?>