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

    public function battle($pokemon, $attack){

        echo $pokemon->name . ' heeft op dit moment ' . $pokemon->health . 'HP van de ' . $pokemon->hitpoints . 'HP <br>';

        echo $this->name . ' valt ' . $pokemon->name . ' aan met ' . $attack->name . '! <br>';

        $attackingPokemon = $this->energyType->name;
        $pokemonWeakness = $pokemon->weakness->energyType;
        $pokemonResistance = $pokemon->resistance->energyType;

        if($attackingPokemon == $pokemonWeakness){
            $attack->hitpoints - $attack->hitpoints * $pokemon->weakness->multiplier;
        }

        if($attackingPokemon == $pokemonResistance){
            $attack->hitpoints - $attack->hitpoints * $pokemon->resistance->value;
        }

        $pokemon->health = $pokemon->health - $attack->hitpoints;

        echo $pokemon->name . ' heeft ' . $pokemon->health . 'HP van de ' . $pokemon->hitpoints . 'HP over <br> <br>';
    }

        
    }

?>