<?php

use Adapters\SquarePegAdapter;
use Entities\RoundHole;
use Entities\RoundPeg;
use Entities\SquarePeg;

require('autoload.php');

$roundPeg = new RoundPeg(15.1);
$roundHole = new RoundHole(15);

echo 'Round peg with radius '.$roundPeg->getRadius().' '.($roundHole->fits($roundPeg) ? 'fits' : 'doesn\'t fit').' in hole with radius '.$roundHole->getRadius().'<br/>';

$squarePeg = new SquarePeg(25);
$squarePegAdapter = new SquarePegAdapter($squarePeg);

echo 'Square peg with width '.$squarePeg->getWidth().' adapted to radius '.$squarePegAdapter->getRadius().' '.($roundHole->fits($squarePegAdapter) ? 'fits' : 'doesn\'t fit').' in hole with radius '.$roundHole->getRadius().'<br/>';