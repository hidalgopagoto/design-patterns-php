<?php
namespace Creators;
use Interfaces\PlaneInterface;
use Entities\Boeing737;
use Entities\Constructors\Plane;

class Boeing737Creator extends Plane
{
    public function getPlane(): PlaneInterface
    {
        return new Boeing737();
    }
}