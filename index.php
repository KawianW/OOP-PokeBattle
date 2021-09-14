<?php 

    include "Pokemon.php";
    include "Pikachu.php";
    include "Charmeleon.php";
    include "EnergyType.php";
    include "Attacks.php";
    include "Weakness.php";

    $pikachu = new Pikachu('Pikachu');
    print_r('<pre>'. $pikachu->name . '</pre>');
    
    $charmeleon = new Charmeleon('Charmeleon');
    print_r('<pre>'. $charmeleon->name . '</pre>');
    
    
    $charmeleon->battle($pikachu, $charmeleon->attacks['Flare']);
    $pikachu->battle($charmeleon, $pikachu->attacks['Electric ring']);

