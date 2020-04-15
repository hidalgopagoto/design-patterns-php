<?php
namespace Entities;
use Interfaces\TableInterface;

class ModernTable implements TableInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Modern Table";
    }
}