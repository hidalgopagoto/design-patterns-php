<?php
namespace Entities;

class TreeType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $texture;

    public function __construct($name, $color, $texture)
    {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    public function draw($canvas, int $x, int $y): void
    {
        echo 'Drawing tree in position ['.$x.', '.$y.']<br />';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getTexture(): string
    {
        return $this->texture;
    }
}