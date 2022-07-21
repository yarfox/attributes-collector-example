<?php
/**
 * The file is part of the attribute.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2021/1/13 1:15 下午
 */

namespace Test;

use Test\Attribute\ClassAttribute;
use Test\Attribute\ClassConstantAttribute;
use Test\Attribute\FunctionAttribute;
use Test\Attribute\FunctionParamAttribute;
use Test\Attribute\MethodAttribute;
use Test\Attribute\MethodParamAttribute;
use Test\Attribute\PropertyAttribute;

#[ClassAttribute(ClassAttribute::NAME)]
class TestAttributeInstance
{
    #[ClassConstantAttribute('This is ClassConstantAttribute')]
    const FOO = 'foo';

    #[PropertyAttribute('This is PropertyAttribute')]
    private string $foo;

    #[MethodAttribute('This is MethodAttribute(foo)', 'foo')]
    public function foo(#[MethodParamAttribute('This is ParamAttribute(foo)')]string $foo): void
    {

    }

    #[MethodAttribute('This is MethodAttribute(bar)', 'bar')]
    public function bar(#[MethodParamAttribute('This is ParamAttribute(bar)')]string $bar): void
    {

    }
}

#[FunctionAttribute('This is FunctionAttribute', 2)]
function foo(#[FunctionParamAttribute('This is FunctionParamAttribute')]string $name): void
{

}
