<?php
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'LightableInterface.php';


$scenic = new Car('blue',4,'electric');
$modus = new Car('white',2,'fuel');
$bike = new Bicycle('white',1);

$scenic->switchOff();





