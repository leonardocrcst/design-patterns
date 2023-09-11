<?php

namespace Creational\FactoryMethod;

class D6 implements Dice
{
    public function roll(): int
    {
        return rand(1, 6);
    }
}