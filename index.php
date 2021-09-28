<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    spl_autoload_register(function ($class_name) {
        $file_name = $class_name. '.php';
        if (!file_exists($file_name)) {
            return false;
        }
        include $file_name;
    });

    $pikachu = new Pikachu('Pikachu');
    print_r('<pre>'. $pikachu->name . '</pre>');
    
    $charmeleon = new Charmeleon('Charmeleon');
    print_r('<pre>'. $charmeleon->name . '</pre>');
    
    
    // $charmeleon->battle($pikachu, $charmeleon->attacks['Flare']);
    // $pikachu->battle($charmeleon, $pikachu->attacks['Electric ring']);

    echo $pikachu->getName() . ' heeft op dit moment ' . $pikachu->getHealth() . 'HP van de ' . $pikachu->getHitpoints() . 'HP <br>';

    echo $pikachu->getName() . ' valt ' . $pikachu->getName() . ' aan met ' . $pikachu->getAttack('Electric ring') . '! <br>';

    echo $pikachu->getName() . ' heeft ' . $pikachu->newhealth() . 'HP van de ' . $pikachu->getHitpoints() . 'HP over <br> <br>';


    echo $charmeleon->getName() . ' heeft op dit moment ' . $charmeleon->getHealth() . 'HP van de ' . $charmeleon->getHitpoints() . 'HP <br>';

    echo $charmeleon->getName() . ' valt ' . $charmeleon->getName() . ' aan met ' . $charmeleon->getAttack('Head Butt') . '! <br>';

    echo $charmeleon->getName() . ' heeft ' . $charmeleon->newhealth() . 'HP van de ' . $charmeleon->getHitpoints() . 'HP over <br> <br>';


