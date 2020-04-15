<?php
namespace Entities;
use Interfaces\TableInterface;

class VictorianTable implements TableInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Victorian Table";
    }
}