<?php

    class Pokemon
     {
        public $Name;
        public $Energytype;
        public $Hitpoints;
        public $Health;
        public $Attacks;
        public $Weakness;
        public $Resistance;

        public function __construct($Name, $Energytype, $Hitpoints, $Health, $Attacks, $Weakness, $Resistance)
        {
            $this->name = $Name;
            $this->energytype = $Energytype;
            $this->hitpoints = $Hitpoints;
            $this->health = $Health;
            $this->attacks = $Attacks;
            $this->weakness = $Weakness;
            $this->resistance = $Resistance;
        }
    }

?>