<?php
/**
 * The file is part of the attributes-collector.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/20 23:03
 */

namespace Test\Handler;

use Test\Attribute\MethodParamAttribute;
use Yarfox\Attribute\Attribute\AttributeHandler;
use Yarfox\Attribute\Handler\AbstractHandler;


#[AttributeHandler(MethodParamAttribute::class)]
class MethodParamAttributeHandler extends AbstractHandler
{
    public function handle(): void
    {
        /** @var MethodParamAttribute $attribute */
        $attribute = $this->attribute;
        var_dump($attribute->foo);
    }
}
