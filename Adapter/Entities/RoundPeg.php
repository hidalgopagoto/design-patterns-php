<?php
namespace Entities;

use Interfaces\RoundInterface;

class RoundPeg implements RoundInterface
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
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }
}