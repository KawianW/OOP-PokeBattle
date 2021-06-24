<?php

    class Pokemon
     {
        // public is een acces modefier
        // name is een opjekt
        public $name;
        public $energyType;
        public $hitpoints;
        public $health;
        public $attacks;
        public $weakness;
        public $resistance;

        public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
        {
            $this->name = $name;
            $this->energytype = $energyType;
            $this->hitpoints = $hitpoints;
            $this->health = $hitpoints;
            $this->attacks = $attacks;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
        }

        public function __toString()
        {
            return json_encode($this);
        }
    }

?>