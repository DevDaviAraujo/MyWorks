<?php

require_once('Veiculo.php');

class Carro extends Veiculo
{
    private string $modelo;
    private string $marca;
    private string $numeroChassi;
    private int $quantidadePortas;
    private string $numeroPlaca;
    private int $ano;
    private float $valor;
    private float $maoDeObra;
    private float $manutencao;
    private float $peça;
    
    
    //Set
    public function setModelo($modelo)
        {
             $this->modelo = $modelo;
        }
    public function setPeça($peça)
        {
             $this->peça = $peça;
        }
    public function setMaoDeObra($maoDeObra)
        {
             $this->maoDeObra = $maoDeObra;
        }
    public function manutencao()
        {
            return $peça + $maoDeObra;
        }    

    public function setMarca($marca)
        {
             $this->marca = $marca;
        }

    public function setNumeroChassi($numeroChassi)
        {
             $this->numeroChassi = $numeroChassi;
        }

    public function setQuantidadePortas($quantidadePortas)
        {
             $this->quantidadePortas = $quantidadePortas;
        }

    public function setNumeroPlaca($numeroPlaca)
        {
             $this->numeroPlaca = $numeroPlaca;
        }

    public function setAno($ano)
        {
             $this->ano = $ano;
        }

    public function setValor($valor)
        {
             $this->valor = $valor;
        }
    
    public function getInfo()
        {
            echo "<p>$this->modelo</p>";
            echo "<p>$this->marca</p>";
            echo "<p>$this->numeroChassi</p>";
            echo "<p>$this->quantidadePortas</p>";
            echo "<p>$this->numeroPlaca</p>";
            echo "<p>$this->ano</p>";
            echo "<p>$this->valor</p>";
        }

}


?>