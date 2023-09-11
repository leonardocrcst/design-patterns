<?php

namespace Creational\Builder;

class SwordBuilder
{
    private string $material;
    private Sword $sword;

    public function __construct(string $material)
    {
        $this->sword = new Sword($material);
        $this->material = $material;
    }

    public function withGem(string $gem): SwordBuilder
    {
        $this->sword->gem = $gem;
        return $this;
    }

    public function withPommel(string $pommel): SwordBuilder
    {
        $this->sword->pommel = $pommel;
        return $this;
    }

    public function withTang(string $tang): SwordBuilder
    {
        $this->sword->tang = $tang;
        return $this;
    }

    public function withGrip(string $grip): SwordBuilder
    {
        $this->sword->grip = $grip;
        return $this;
    }

    public function withGrossGuard(string $grossGuard): SwordBuilder
    {
        $this->sword->grossguard = $grossGuard;
        return $this;
    }

    public function build(): Sword
    {
        $final = $this->sword;
        $this->sword = new Sword($this->material);
        return $final;
    }
}
