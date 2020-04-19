<?php

use Entities\Forest;

require('autoload.php');

$forest = new Forest();
$forest->plantTree(10, 15, "eucalyptus", "green", "default");
$forest->plantTree(15, 20, "eucalyptus", "green", "default");
$forest->plantTree(0, 0, "pine", "brown", "oldtree");

$forest->draw("#gameCanvas");