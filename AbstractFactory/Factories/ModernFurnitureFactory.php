<?php
namespace Factories;
use Entities\ModernChair;
use Entities\ModernSofa;
use Entities\ModernTable;
use Interfaces\ChairInterface;
use Interfaces\FurnitureFactoryInterface;
use Interfaces\SofaInterface;
use Interfaces\TableInterface;

class ModernFurnitureFactory implements FurnitureFactoryInterface
{

    public function createChair(): ChairInterface
    {
        return new ModernChair();
    }

    public function createTable(): TableInterface
    {
        return new ModernTable();
    }

    public function createSofa(): SofaInterface
    {
        return new ModernSofa();
    }
}