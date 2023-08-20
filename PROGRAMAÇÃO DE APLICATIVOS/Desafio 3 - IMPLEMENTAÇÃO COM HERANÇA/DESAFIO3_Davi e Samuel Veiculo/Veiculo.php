<?php

abstract class Veiculo
{
    private string $modelo;
    private string $marca;
    private string $numeroChassi;
    private int $quantidadePortas;
    private float $valor;
    
    //Get
    public function getModelo()
        {
            return $this->modelo;
        }

    public function getMarca()
        {
            return $this->marca;
        }

    public function getNumeroChassi()
        {
            return $this->numeroChassi;
        }

    public function getQuantidadePortas()
        {
            return $this->quantidadePortas;
        }

    public function getValor()
        {
            return $this->valor;
        }

    //Set
    public function setModelo($modelo)
        {
             $this->modelo = $modelo;
        }

    public function setMarca($marca)
        {
             $this->marac = $marca;
        }

    public function setNumeroChassi($numeroChassi)
        {
             $this->numeroChassi = $numeroChassi;
        }
        
    public function setQuantidadePortas($quantidadePortas)
        {
             $this->quantidadePortas = $quantidadePortas;
        }
    public function setValor($valor)
        {
             $this->valor = $valor;
        }

}

?>