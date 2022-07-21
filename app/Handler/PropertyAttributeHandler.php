<?php
/**
 * The file is part of the attributes-collector.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/20 23:03
 */

namespace Test\Handler;

use Test\Attribute\PropertyAttribute;
use Yarfox\Attribute\Attribute\AttributeHandler;
use Yarfox\Attribute\Handler\AbstractHandler;

#[AttributeHandler(PropertyAttribute::class)]
class PropertyAttributeHandler extends AbstractHandler
{
    public function handle(): void
    {
        /** @var PropertyAttribute $attribute */
        $attribute = $this->attribute;
        var_dump($attribute->foo);
    }
}
