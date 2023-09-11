<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Exception\InvalidNumberOfSides;
use Exception;

class DiceCreator
{
    public function d4Factory(): D4
    {
        return new D4();
    }

    public function d6Factory(): D6
    {
        return new D6();
    }

    public function d8Factory(): D8
    {
        return new D8();
    }

    /**
     * Simple Factory
     * @throws Exception
     */
    public function diceFactory(int $sides): Dice
    {
        return match ($sides) {
            4 => $this->d4Factory(),
            6 => $this->d6Factory(),
            8 => $this->d8Factory(),
            default => throw new InvalidNumberOfSides($sides),
        };
    }
}
