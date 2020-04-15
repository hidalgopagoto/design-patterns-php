<?php
namespace Interfaces;
interface FurnitureFactoryInterface {
    public function createChair(): ChairInterface;
    public function createTable(): TableInterface;
    public function createSofa(): SofaInterface;
}