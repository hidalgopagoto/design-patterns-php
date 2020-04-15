<?php
namespace Entities;
use Interfaces\ChairInterface;

class VictorianChair implements ChairInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Victorian Chair";
    }
}