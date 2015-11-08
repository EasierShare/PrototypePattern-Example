<?php

include_once 'Prototype.php';

class Tank extends HeroPrototype
{
    const TYPE = 'TANK';

    function __clone() {}
}