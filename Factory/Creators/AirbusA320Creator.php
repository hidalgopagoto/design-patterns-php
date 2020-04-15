<?php
namespace Creators;
use Interfaces\PlaneInterface;
use Entities\AirbusA320;
use Entities\Constructors\Plane;

class AirbusA320Creator extends Plane
{
    public function getPlane(): PlaneInterface
    {
        return new AirbusA320();
    }
}