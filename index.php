<?php 

    include "Pokemon.php";
    include "Pikachu.php";
    include "EnergyType.php";
    include "Attacks.php";
    include "Weakness.php";

$pikachu = new Pikachu("karel");
echo "<pre>" . $pikachu ."</pre>";