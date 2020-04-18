<?php
namespace Entities;

class Product extends Item
{

    public function count(): int
    {
        return $this->getQuantity();
    }
}