<?php
namespace Entities;
use Interfaces\SofaInterface;

class ArtDecoSofa implements SofaInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Art Deco Sofa";
    }
}