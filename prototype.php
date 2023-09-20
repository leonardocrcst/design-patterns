<?php

include_once 'config.php';

use Creational\Prototype\Smartphone;

$originalPhone = new Smartphone('Samsung', 'Galaxy S21', 'Preto');
$clonedPhone = $originalPhone->clone();

$clonedPhone->setModelo('Galaxy S22');
$clonedPhone->setCor('Azul');

echo "Original: " . $originalPhone->getMarca() . " "
    . $originalPhone->getModelo() . " - "
    . $originalPhone->getCor() . "\n";

echo "Clonado: " . $clonedPhone->getMarca() . " "
    . $clonedPhone->getModelo() . " - "
    . $clonedPhone->getCor() . "\n";

