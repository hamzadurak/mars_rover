<?php

use App\Coordinate\Coordinate;
use App\Plateau\Plateau;
use App\Rover\Rover;

require_once __DIR__ . '/vendor/autoload.php';

echo "Enter the plateau limits\n";
$plateauLimits = fgets(STDIN);

[$x, $y] = explode(' ', $plateauLimits);

$plateau = new Plateau(trim($x), trim($y));

echo "Locate Rover on the plateau\n";
$positionAndDirection = fgets(STDIN);

[$x, $y, $d] = explode(' ', $positionAndDirection);

$plateau->locateRover(new Rover(new Coordinate(trim($x), trim($y)), trim($d)));

echo "Move the rover...\n";
$move = fgets(STDIN);

$commands = str_split($move);

foreach ($commands as $command) {
    if ($command) {
        $plateau->moveRover($command);
    }
}

echo $plateau->rover->__toString();
