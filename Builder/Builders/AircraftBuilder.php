<?php
namespace Builders;

use Entities\Aircraft;
use Entities\Manufacturer;
use Interfaces\BuilderInterface;

class AircraftBuilder implements BuilderInterface
{

    /**
     * @var Aircraft
     */
    private $aircraft;

    public function __construct()
    {
        $this->aircraft = new Aircraft();
    }

    public function reset(): void
    {
        $this->aircraft = new Aircraft();
    }

    public function setManufacturer(Manufacturer $manufacturer): AircraftBuilder
    {
        $this->aircraft->setManufacturer($manufacturer);
        return $this;
    }

    public function setSeats(int $seats): AircraftBuilder
    {
        $this->aircraft->setSeats($seats);
        return $this;
    }

    public function setEngines(int $engines): AircraftBuilder
    {
        $this->aircraft->setEngines($engines);
        return $this;
    }

    public function setSeatsSecondFloor(int $seats): AircraftBuilder
    {
        $this->aircraft->setSeatsOnSecondFloor($seats);
        return $this;
    }

    public function setName(string $name): AircraftBuilder
    {
        $this->aircraft->setName($name);
        return $this;
    }

    public function getResult(): Aircraft
    {
        return $this->aircraft;
    }


}