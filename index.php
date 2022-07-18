<?php
/**
 * The file is part of the test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/7/18 13:02
 */

use Yarfox\Attribute\AttributeKeeper;

require './vendor/autoload.php';

AttributeKeeper::bootloader();
AttributeKeeper::collect();
