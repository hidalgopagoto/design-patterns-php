<?php
namespace Entities;

use Interfaces\CompositeInterface;

abstract class Item implements CompositeInterface
{
    /**
     * @var int
     */
    protected $quantity;

    public function __construct()
    {
        $this->quantity = 1;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
}