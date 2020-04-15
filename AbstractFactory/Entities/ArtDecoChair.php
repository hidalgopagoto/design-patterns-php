<?php
namespace Entities;
use Interfaces\ChairInterface;

class ArtDecoChair implements ChairInterface
{
    public function hasLegs(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return "Art Deco Chair";
    }
}