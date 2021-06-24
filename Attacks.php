<?php

class Attacks
{
    public $Name;
    public $Hitpoints;

    public function __construct($Name, $Hitpoints)
    {
        $this->name = $Name;
        $this->hitpoints = $Hitpoints;
    }
}