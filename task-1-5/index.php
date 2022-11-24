<?php

$bmw = [
    'model' => "X5",
    'speed' => "120",
    'doors' => "5",
    'year' => "2015"
];
$toyota = [
    'model' => "camry",
    'speed' => "210",
    'doors' => "5",
    'year' => "2018"
];
$opel = [
    'model' => "astra H",
    'speed' => "120",
    'doors' => "5",
    'year' => "2004"
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $key => $car) {
    echo "CAR $key <br>";
    echo implode(" ", $car) . "<br><br>";
}