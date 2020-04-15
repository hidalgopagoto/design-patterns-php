<?php
namespace Entities\Constructors;
use Interfaces\PlaneInterface;
abstract class Plane
{
    public function getPlane(): PlaneInterface
    {
    }

    public function getInfo()
    {
        echo "Max speed for plane {$this->getPlane()->getName()} is {$this->getPlane()->getMaxSpeed()} knots";
        echo "<br />";
    }
}