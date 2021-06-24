<?php 

    include "Pokemon.php";
    include "Pikachu.php";
    include "Charmeleon.php";
    include "EnergyType.php";
    include "Attacks.php";
    include "Weakness.php";

$pikachu = new Pikachu("karel");
echo "<pre>" . $pikachu->name ."</pre>";

$charmeleon = new Charmeleon("berend");
echo "<pre>" . $charmeleon->name . "</pre>";

