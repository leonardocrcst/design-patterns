<?php

namespace Creational\AbstractFactory;

abstract class Soldier
{
    public readonly Recruit $recruit;
    public readonly string $weapon;

    public function setRecruit(Recruit $recruit): void
    {
        $this->recruit = $recruit;
    }

    public function setWeapon(string $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function attack(Soldier $soldier): string
    {
        return sprintf(
            "\r\n%s ataca %s com %s",
            $this->recruit->name,
            $soldier->recruit->name,
            $this->weapon
        );
    }
}
