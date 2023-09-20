<?php

include_once 'config.php';

use Creational\Sigleton\Logger;

$l1 = Logger::getInstance();
$l2 = Logger::getInstance();

if ($l1 === $l2) {
    Logger::log("O registrador tem uma única instância.");
} else {
    Logger::log("Os registradores são diferentes.");
}