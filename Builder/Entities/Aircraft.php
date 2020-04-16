<?php
namespace Entities;

use Interfaces\PrintableInterface;

class Aircraft implements PrintableInterface
{
    /**
     * @var Manufacturer
     */
    private $manufacturer;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $seats;

    /**
     * @var int
     */
    private $engines;

    /**
     * @var int
     */
    private $seatsOnSecondFloor;

    /**
     * @return Manufacturer
     */
    public function getManufacturer(): Manufacturer
    {
        return $this->manufacturer;
    }

    /**
     * @param Manufacturer $manufacturer
     */
    public function setManufacturer(Manufacturer $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return int
     */
    public function getSeats(): int
    {
        return $this->seats;
    }

    /**
     * @param int $seats
     */
    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getEngines(): int
    {
        return $this->engines;
    }

    /**
     * @param int $engines
     */
    public function setEngines(int $engines): void
    {
        $this->engines = $engines;
    }

    /**
     * @return int
     */
    public function getSeatsOnSecondFloor(): ?int
    {
        return $this->seatsOnSecondFloor;
    }

    /**
     * @param int $seatsOnSecondFloor
     */
    public function setSeatsOnSecondFloor(int $seatsOnSecondFloor): void
    {
        $this->seatsOnSecondFloor = $seatsOnSecondFloor;
    }

    public function toArray(): array
    {
        $result = [
            'name' => $this->getName(),
            'seats' => $this->getSeats(),
            'engines' => $this->getEngines(),
            'manufacturer' => $this->getManufacturer()->toArray()
        ];
        if ($this->getSeatsOnSecondFloor()) {
            $result['seatsOnSecondFloor'] = $this->getSeatsOnSecondFloor();
        }
        return $result;
    }

}