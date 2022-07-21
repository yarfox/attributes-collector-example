<?php
/**
 * The file is part of the attributes-collector.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/20 23:03
 */

namespace Test\Handler;

use Test\Attribute\MethodAttribute;
use Yarfox\Attribute\Attribute\AttributeHandler;
use Yarfox\Attribute\Handler\AbstractHandler;

#[AttributeHandler(MethodAttribute::class)]
class MethodAttributeHandler extends AbstractHandler
{
    public function handle(): void
    {
        /** @var MethodAttribute $attribute */
        $attribute = $this->attribute;
        var_dump($attribute->foo);
    }
}
