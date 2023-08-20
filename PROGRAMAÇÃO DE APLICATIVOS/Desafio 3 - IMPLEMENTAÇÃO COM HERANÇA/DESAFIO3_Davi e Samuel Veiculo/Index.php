<?php
    require_once('Veiculo.php');
    require_once('Carro.php');

    $carro = new carro;

    $carro->setModelo('Opala');
    $carro->setMarca('Chevrolet');
    $carro->setNumeroChassi('32');
    $carro->setQuantidadePortas(2);
    $carro->setNumeroPlaca('DSA-0921');
    $carro->setAno(1988);
    $carro->setValor(15000);
    $carro->setMaoDeObra(20);
    $carro->setPeça(20);


    echo " {$carro->getInfo()}";
    $carro->manutencao();
?>