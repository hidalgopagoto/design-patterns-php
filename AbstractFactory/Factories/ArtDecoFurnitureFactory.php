<?php
namespace Factories;
use Entities\ArtDecoChair;
use Entities\ArtDecoSofa;
use Entities\ArtDecoTable;
use Interfaces\ChairInterface;
use Interfaces\FurnitureFactoryInterface;
use Interfaces\SofaInterface;
use Interfaces\TableInterface;

class ArtDecoFurnitureFactory implements FurnitureFactoryInterface
{

    public function createChair(): ChairInterface
    {
        return new ArtDecoChair();
    }

    public function createTable(): TableInterface
    {
        return new ArtDecoTable();
    }

    public function createSofa(): SofaInterface
    {
        return new ArtDecoSofa();
    }
}