<?php
namespace Adapters;

use Entities\RoundPeg;
use Entities\SquarePeg;
class SquarePegAdapter extends RoundPeg
{
    /**
     * @var SquarePeg
     */
    private $peg;

    public function __construct(SquarePeg $peg)
    {
        $this->peg = $peg;
    }

    public function getRadius(): float
    {
        return ($this->peg->getWidth() * sqrt(2)) / 2;
    }
}