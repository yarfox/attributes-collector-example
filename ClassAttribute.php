<?php
/**
 * The file is part of the test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/18 13:01
 */

namespace Test;

use Attribute;
use JetBrains\PhpStorm\ExpectedValues;

#[Attribute(Attribute::TARGET_CLASS)]
class ClassAttribute
{
    public const TEST = 'test';

    private string $test;

    public function __construct(#[ExpectedValues(valuesFromClass: ClassAttribute::class)] string $test)
    {
        $this->test = $test;
    }

    public function getTest(): string
    {
        return $this->test;
    }
}
