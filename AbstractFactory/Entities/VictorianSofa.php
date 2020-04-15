<?php
namespace Entities;
use Interfaces\SofaInterface;

class VictorianSofa implements SofaInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Victorian Sofa";
    }
}