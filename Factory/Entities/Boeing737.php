<?php
namespace Entities;

use Interfaces\PlaneInterface;

class Boeing737 implements PlaneInterface {
    public function getMaxSpeed(): int
    {
        return 700;
    }
    public function getName(): string
    {
        return "Boeing 737";
    }
}