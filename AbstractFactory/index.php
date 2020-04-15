<?php

use Factories\ArtDecoFurnitureFactory;

require('autoload.php');

$factory = new ArtDecoFurnitureFactory();

$chair = $factory->createChair();
$table = $factory->createTable();
$sofa = $factory->createSofa();

echo $chair->getName()." / Has legs: ".($chair->hasLegs() ? "yes" : "no")."<br/>";
echo $table->getName()." / Has legs: ".($table->hasLegs() ? "yes" : "no")."<br/>";
echo $sofa->getName()." / Has legs: ".($sofa->hasLegs() ? "yes" : "no")."<br/>";