<?php

use Entities\DogHandler;
use Entities\MonkeyHandler;
use Entities\SquirrelHandler;
use Interfaces\HandlerInterface;

require('autoload.php');

function process(HandlerInterface $handler) {
    $foodList = ['Orange', 'Nut', 'Banana', 'Apple', 'Bone', 'Fish', 'Tuna'];
    foreach ($foodList as $food) {
        $result = $handler->handle($food);
        if ($result) {
            echo $result.'<br/>';
        } else {
            echo $food.' left untouched<br/>';
        }
    }
}

$dog = new DogHandler();
$squirrel = new SquirrelHandler();
$monkey = new MonkeyHandler();

$dog->setNext($squirrel);
$squirrel->setNext($monkey);

process($dog);
echo '=======<br/>';
process($squirrel);
echo '=======<br/>';
process($monkey);
