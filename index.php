<?php
/**
 * The file is part of the test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/18 13:02
 */

use Yarfox\Attribute\AttributeKeeper;
use Yarfox\Attribute\Contract\LoggerInterface;
use Yarfox\Container\Facade\Container;

require './vendor/autoload.php';

AttributeKeeper::bootloader();

$logger = Container::getInstance(LoggerInterface::class);
$logger->setLevel(LoggerInterface::LEVEL_SUCCESS);

AttributeKeeper::collect();
