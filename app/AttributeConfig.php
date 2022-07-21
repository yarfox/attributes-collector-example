<?php
/**
 * The file is part of the test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/18 13:00
 */

namespace Test;

use JetBrains\PhpStorm\ArrayShape;
use Yarfox\Attribute\Contract\ConfigInterface;


class AttributeConfig implements ConfigInterface
{
    #[ArrayShape(['scanDirs' => 'array', 'functions' => 'array'])]
    public static function getAttributeConfigs(): array
    {
        return [
            'scanDirs' => [
                __NAMESPACE__ => __DIR__,
            ],
            'functions' => [
                '\Test\foo',
            ],
        ];
    }
}
