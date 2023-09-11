<?php

namespace Creational\FactoryMethod\Exception;

use Exception;

class InvalidNumberOfSides extends Exception
{
    public function __construct(int $sides)
    {
        parent::__construct("Dice error: invalid number of sides ($sides).");
    }
}
