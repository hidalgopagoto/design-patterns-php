<?php
namespace Factories;

use Entities\TreeType;

class TreeTypeFactory
{
    /**
     * @var array
     */
    private static $treeTypes = [];

    public static function getTreeType($name, $color, $texture): TreeType
    {
        foreach (self::$treeTypes as $treeType) {
            if ($treeType->getName() == $name && $treeType->getColor() == $color && $treeType->getTexture() == $texture) {
                return $treeType;
            }
        }
        $treeType = new TreeType($name, $color, $texture);
        self::$treeTypes[] = $treeType;
        return $treeType;
    }
}