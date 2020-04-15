<?php
namespace Factories;
use Entities\VictorianChair;
use Entities\VictorianSofa;
use Entities\VictorianTable;
use Interfaces\ChairInterface;
use Interfaces\FurnitureFactoryInterface;
use Interfaces\SofaInterface;
use Interfaces\TableInterface;

class VictorianFurnitureFactory implements FurnitureFactoryInterface
{

    public function createChair(): ChairInterface
    {
        return new VictorianChair();
    }

    public function createTable(): TableInterface
    {
        return new VictorianTable();
    }

    public function createSofa(): SofaInterface
    {
        return new VictorianSofa();
    }
}