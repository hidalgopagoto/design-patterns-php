<?php
namespace Entities;

use Interfaces\SquareInterface;

class SquarePeg implements SquareInterface
{
    /**
     * @var float
     */
    private $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }
}