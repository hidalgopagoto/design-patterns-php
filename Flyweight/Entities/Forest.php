<?php
namespace Entities;

use Factories\TreeTypeFactory;

class Forest
{
    /**
     * @var array
     */
    public $trees;

    public function plantTree($x, $y, $name, $color, $texture)
    {
        $type = TreeTypeFactory::getTreeType($name, $color, $texture);
        $tree = new Tree($x, $y, $type);
        $this->trees[] = $tree;
    }

    public function draw($canvas)
    {
        foreach ($this->trees as $tree) {
            $tree->draw($canvas);
        }
    }
}