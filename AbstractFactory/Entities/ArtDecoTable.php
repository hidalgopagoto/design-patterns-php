<?php
namespace Entities;
use Interfaces\TableInterface;

class ArtDecoTable implements TableInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Art Deco Table";
    }
}