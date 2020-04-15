<?php
namespace Entities;
use Interfaces\ChairInterface;

class ModernChair implements ChairInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Modern Chair";
    }
}