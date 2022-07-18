<?php
/**
 * The file is part of the test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/18 13:01
 */

namespace Test;

use Yarfox\Attribute\Attribute\AttributeHandler;
use Yarfox\Attribute\Handler\AbstractHandler;

#[AttributeHandler(ClassAttribute::class)]
class ClassAttributeHandler extends AbstractHandler
{
    public function handle(): void
    {
        /**
         * @var $attribute ClassAttribute
         */
        var_dump($this);
        $attribute = $this->attribute;
        var_dump($attribute->getTest());
    }
}
