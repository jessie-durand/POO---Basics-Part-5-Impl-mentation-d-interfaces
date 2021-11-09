<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'LightableInterface.php';

// Partie Interface
$car3 = new Car ("purple", 4, "electric");
echo $car3->switchOn() . "<br/>";
echo $car3->switchOff() . "<br/>";
var_dump($car3);

$bicycle2 = new Bicycle("vert", 2);
$bicycle2->setCurrentSpeed(5);
echo $bicycle2->switchOn() . "<br/>";
echo $bicycle2->switchOff() . "<br/>";
var_dump($bicycle2);

$bicycle3 = new Bicycle("marron", 2);
$bicycle3->setCurrentSpeed(20);
echo $bicycle3->switchOn() . "<br/>";
echo $bicycle3->switchOff() . "<br/>";
var_dump($bicycle3);


// Partie exception

$car2 = new Car ("violet", 4, "fuel");
try{
    $car2->start();
} catch (Exception $e) {
    $car2->getParkBrake() === "Le frein à main est serré";
    $car2->setParkBrake() === false;
} finally {
    echo "Ma voiture roule comme un donut";
}

$bicycle = new Bicycle('rose', 2);
echo $bicycle->forward();



$car = new Car('noir', 4, 'electric');
echo $car->forward();


$truck = new Truck ('violet', 6, 'fuel',27);
echo $truck->forward();


echo $truck->lading();