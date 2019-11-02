<?php
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'LightableInterface.php';


$scenic = new Car('blue',4,'electric');
$modus = new Car('white',2,'fuel');
$bike = new Bicycle('white',1);

$scenic->switchOff();
var_dump($scenic->switchOn());
if ($scenic->switchOn()) {
    echo 'Scenic light On ';
}
echo "<br>";
if (!$modus->switchOff()) {
    echo 'Modus light Off';
}
echo "<br>";
$bike->setCurrentSpeed(0);
if ($bike->switchOn()) {
    echo 'Bike light On';
} else {
    echo 'Bike light Off';
}
echo "<br>";
$bike->setCurrentSpeed(12);
if ($bike->switchOn()) {
    echo 'Bike light On';
} else {
    echo 'Bike light Off';
}








