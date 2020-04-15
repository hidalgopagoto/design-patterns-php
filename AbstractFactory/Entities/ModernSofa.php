<?php
namespace Entities;
use Interfaces\SofaInterface;

class ModernSofa implements SofaInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Modern Sofa";
    }
}