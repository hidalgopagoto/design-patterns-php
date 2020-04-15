<?php
namespace Entities;

use Interfaces\PlaneInterface;

class AirbusA320 implements PlaneInterface {
    public function getMaxSpeed(): int
    {
        return 690;
    }
    public function getName(): string
    {
        return "Airbus A320";
    }
}