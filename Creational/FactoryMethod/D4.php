<?php

namespace Creational\FactoryMethod;

class D4 implements Dice
{
    public function roll(): int
    {
        return rand(1, 4);
    }
}