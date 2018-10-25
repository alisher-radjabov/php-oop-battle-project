<?php

require_once __DIR__.'/lib/Ship.php';

function printShipSummary($someShip)
{

echo "Ship name: " . $someShip->name;
echo "<hr />";
echo $someShip->getName($someShip->name);
echo "<hr />";
echo $someShip->getNameAndSpecs(false);
echo "<hr />";
echo $someShip->getNameAndSpecs(true);


}

$ship = new Ship();
$ship->name = 'Jedi Starship';
$ship->weaponPower = 10;
$ship->strength = 51;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

printShipSummary($ship);
echo "<hr />";
printShipSummary($otherShip);
echo "<hr />";

if($ship->doesGivenShipHaveMoreStrength($otherShip)){
    echo $otherShip->name . ' has more strength';
} else {
    echo $ship->name . ' has more strength'; 
}
