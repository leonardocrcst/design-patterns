<?php

use Creational\Builder\SwordBuilder;

include_once 'config.php';

$swordMaker = new SwordBuilder('iron');

$simpleSword = $swordMaker
    ->withGrip('simple')
    ->withGrossGuard('cross')
    ->withPommel('ball')
    ->build();

$magicSword = $swordMaker
    ->withGrip('dark')
    ->withGem('ice')
    ->withGrossGuard('arach')
    ->withTang('coiote')
    ->build();
