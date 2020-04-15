<?php
require("autoload.php");

use Creators\AirbusA320Creator;
use Creators\Boeing737Creator;

echo (new Boeing737Creator())->getInfo();
echo (new AirbusA320Creator())->getInfo();
