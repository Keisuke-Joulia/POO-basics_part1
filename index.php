<?php

require_once 'Bicycle.php';
require_once 'Cars.php';

$bike = new Bicycle("purple");

var_dump($bike);

$bike->setCurrentSpeed(0);
var_dump($bike);

echo  $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

echo $bike->getColor();

$car = new Cars("Homer's pink Sedan", 5, "Essence");

var_dump($car);

$car->setCurrentSpeed(0);

echo $car->getColor() . '<br>';
echo $car->engine();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . 'km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . 'km/h' . '<br>';
echo $car->brake();