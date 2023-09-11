<?php

namespace Creational\AbstractFactory;

abstract class Academy
{
    abstract public function createScout(Recruit $recruit);
}
