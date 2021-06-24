<?php

    class Pikachu extends Pokemon {
        public function __construct($name)
        {
            // $name = "Pikachu";
            $energyType = "Electric";
            $hitpoints = 60;
            $attacks = array(
                'Electric ring' => new Attacks('Electric ring', 50),
                'Pika Punch' => new Attacks('Pika Punch', 20)
            );
            $weakness = "Fire";
            $resistance = "Fighting";

            parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance);
        }

    }