<?php

use Builders\AircraftBuilder;
use Directors\AircraftDirector;

require('autoload.php');

$builder = new AircraftBuilder();
$director = new AircraftDirector($builder);

$director->buildBoeing777();

$boeing777 = $builder->getResult();

echo 'Boeing 777:<pre>';
print_r($boeing777->toArray());
echo '</pre>';

$director->buildAirbusA380();

$airbusa380 = $builder->getResult();

echo 'Airbus A380:<pre>';
print_r($airbusa380->toArray());
echo '</pre>';