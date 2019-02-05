<?php

/**
 * Inom OOP finns följande
 *
 * Klasser = Classes
 * Egenskaper = Properties
 * Metoder = Methods
 * Objekt = Object
 * Instanser = Instances
 *
 */

require("includes/Car.php");

$car1 = new Car;
$car1->manufacturer = "Nissan";
$car1->model = "Qashqai";
$car1->year = 2019;

$car2 = new Car;
$car2->manufacturer = "Toyota";
$car2->model = "RAV4";
$car2->year = 2014;
$car2->fourWd = true;

var_dump($car1);
var_dump($car2);

$cars = [$car1, $car2];
foreach ($cars as $car) {
	// echo "<h1>{$car->manufacturer} {$car->model} {$car->year}</h1>";
	echo $car->getInfo();
	echo "Fyrhjulsdriven? ";
	if ($car->fourWd) {
		echo "Japp";
	} else {
		echo "Nope";
	}
}
