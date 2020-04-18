<?php
namespace Entities;

use Interfaces\CompositeInterface;

class Cart
{
    /**
     * @var array
     */
    protected $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem(CompositeInterface $item): void
    {
        array_push($this->items, $item);
    }

    public function count(): int
    {
        $count = 0;
        foreach ($this->items as $item) {
            $count += $item->count();
        }
        return $count;
    }
}