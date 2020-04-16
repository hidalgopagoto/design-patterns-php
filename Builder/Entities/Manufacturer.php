<?php
namespace Entities;

use Interfaces\PrintableInterface;

class Manufacturer implements PrintableInterface
{
    /**
     * @var string
     */
    private $name;

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


    public function toArray(): array
    {
        return [
            'name' => $this->getName()
        ];
    }
}