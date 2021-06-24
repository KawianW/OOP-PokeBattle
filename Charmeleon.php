<?php

    class Charmeleon extends Pokemon {
        public function __construct($name)
        {
            // $name = "Charemeleon";
            $energyType = "Fire";
            $hitpoints = 60;
            $attacks = array(
                'Head Butt' => new Attacks('Head Butt', 10),
                'Flare' => new Attacks('Flare', 30)
            );
            $weakness = "Water";
            $resistance = "Lightning";

            parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance);
        }

    }