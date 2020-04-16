<?php
namespace Directors;

use Builders\AircraftBuilder;
use Entities\Manufacturer;

class AircraftDirector
{

    private $builder;

    public function __construct(AircraftBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildBoeing777(): void
    {
        $this->builder->reset();

        $manufacturer = new Manufacturer();
        $manufacturer->setName('Boeing');

        $this->builder
            ->setName('Boeing 777')
            ->setManufacturer($manufacturer)
            ->setEngines(2)
            ->setSeats(188);
    }

    public function buildAirbusA380(): void
    {
        $this->builder->reset();

        $manufacturer = new Manufacturer();
        $manufacturer->setName('Airbus');

        $this->builder
            ->setName('Airbus A380')
            ->setManufacturer($manufacturer)
            ->setEngines(4)
            ->setSeats(560)
            ->setSeatsSecondFloor(36);
    }
}