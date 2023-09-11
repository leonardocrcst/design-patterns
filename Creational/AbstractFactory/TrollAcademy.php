<?php

namespace Creational\AbstractFactory;

class TrollAcademy extends Academy
{
    public function createScout(TrollRecruit|Recruit $recruit): Soldier
    {
        $soldier = new TrollSoldier();
        $soldier->setRecruit($recruit);
        $soldier->setWeapon('Club');
        return $soldier;
    }
}
