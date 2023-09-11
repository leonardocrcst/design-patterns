<?php

include_once 'config.php';

use Creational\FactoryMethod\DiceCreator;

try {
    $diceFactory = new DiceCreator();
    $d4 = $diceFactory->d4Factory();
    $d6 = $diceFactory->d6Factory();
    $d8 = $diceFactory->d8Factory();
    $dn = $diceFactory->diceFactory(6);
    echo sprintf(
        "Rolando...\r\nD4: %s\r\nD6: %s\r\nD8: %s\r\nD?: %s",
        $d4->roll(),
        $d6->roll(),
        $d8->roll(),
        $dn->roll()
    );
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}";
}
