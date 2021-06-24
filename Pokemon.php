<?php

    class Pokemon
     {
        // public is een acces modefier
        // name is een opjekt
        public $Name;
        public $EnergyType;
        public $Hitpoints;
        public $Health;
        public $Attacks;
        public $Weakness;
        public $Resistance;

        public function __construct($Name, $EnergyType, $Hitpoints, $Health, $Attacks, $Weakness, $Resistance)
        {
            $this->name = $Name;
            $this->energytype = $EnergyType;
            $this->hitpoints = $Hitpoints;
            $this->health = $Health;
            $this->attacks = $Attacks;
            $this->weakness = $Weakness;
            $this->resistance = $Resistance;
        }
    }

?>