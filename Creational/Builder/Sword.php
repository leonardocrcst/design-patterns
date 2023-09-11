<?php

namespace Creational\Builder;

class Sword
{
    public string $gem;
    public string $pommel;
    public string $tang;
    public string $grip;
    public string $grossguard;

    public function __construct(
        public string $material
    ) {

    }
}
