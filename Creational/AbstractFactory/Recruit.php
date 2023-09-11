<?php

namespace Creational\AbstractFactory;

abstract readonly class Recruit
{
    public function __construct(public string $name) {}
}
