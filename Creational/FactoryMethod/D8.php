<?php

namespace Creational\FactoryMethod;

class D8 implements Dice
{
    public function roll(): int
    {
        return rand(1, 8);
    }
}