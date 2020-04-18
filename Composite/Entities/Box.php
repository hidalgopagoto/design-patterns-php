<?php
namespace Entities;

use Interfaces\CompositeInterface;

class Box extends Item
{

    /**
     * @var array
     */
    protected $items;

    public function __construct()
    {
        parent::__construct();
        $this->items = [];
    }

    public function count(): int
    {
        $count = 0;
        foreach ($this->items as $item) {
            $count += $item->count();
        }
        return $count * $this->getQuantity();
    }

    public function addItem(CompositeInterface $item)
    {
        array_push($this->items, $item);
    }
}