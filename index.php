<?php 

spl_autoload_register(function ($class_name) {
    $file_name = $class_name. '.php';
    if (!file_exists($file_name)) {
        return false;
    }
    include $file_name;
});

// $pikachu = new Pikachu("karel");
// echo "<pre>" . $pikachu->name ."</pre>";

// $charmeleon = new Charmeleon("berend");
// echo "<pre>" . $charmeleon->name . "</pre>";

echo $pikachu->getName() . ' health : ' . $charmeleon->getHealth() . ' / ' . $pikachu->getHitPoints();
	echo '<br>' . $pikachu->getName() . ' Attacks ' . $charmeleon->getName() . ' with a ' . $pikachu->attack(target: $charmeleon, attackNumber: 0) . ' attack ' . '<br>';
	echo $pikachu->getName() . ' health : ' . $charmeleon->getHealth() . ' / ' . $pikachu->getHitPoints() . '<br>';

	echo $charmeleon->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $charmeleon->getHitPoints();
	echo '<br>' . $charmeleon->getName() . ' Attacks ' . $pikachu->getName() . ' with a ' . $charmeleon->attack(target: $pikachu, attackNumber: 0) . ' attack ' . '<br>';
	echo $charmeleon->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $charmeleon->getHitPoints() . '<br>';

	echo ' There are ' . Pokemon::getPopulation() . ' pokemon(s) alive! ';

