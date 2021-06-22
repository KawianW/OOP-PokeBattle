<?php

class Weakness
{
    public $EnergyType;
    public $Multiplier;

    public function __construct($EnergyType, $Multiplier)
    {
        $this->energyType = $EnergyType;
        $this->multiplier = $Multiplier;
    }
}