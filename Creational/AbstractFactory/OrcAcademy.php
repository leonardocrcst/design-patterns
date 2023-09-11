<?php

namespace Creational\AbstractFactory;

class OrcAcademy extends Academy
{
    public function createScout(OrcRecruit|Recruit $recruit): Soldier
    {
        $soldier = new OrcSoldier();
        $soldier->setRecruit($recruit);
        $soldier->setWeapon('Club');
        return $soldier;
    }
}
