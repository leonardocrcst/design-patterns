<?php

use Creational\AbstractFactory\OrcAcademy;
use Creational\AbstractFactory\OrcRecruit;
use Creational\AbstractFactory\TrollAcademy;
use Creational\AbstractFactory\TrollRecruit;

include_once('config.php');

$gamjee = new TrollRecruit('Gamjee');
$torkag = new OrcRecruit('Torkag');

$trollAcademy = new TrollAcademy();
$orcAcademy = new OrcAcademy();

$trollScout = $trollAcademy->createScout($gamjee);
$orcScout = $orcAcademy->createScout($torkag);

echo $trollScout->attack($orcScout);
echo $orcScout->attack($trollScout);
