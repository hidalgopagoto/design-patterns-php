<?php
namespace Entities;

use Interfaces\RoundInterface;

class RoundHole implements RoundInterface
{
    /**
     * @var float
     */
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param RoundPeg $peg
     * @return bool
     */
    public function fits(RoundPeg $peg): bool
    {
        return $this->radius >= $peg->getRadius();
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }
}