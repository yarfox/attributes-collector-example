<?php

namespace PHPSTORM_META {

    override(\Psr\Container\ContainerInterface::get(0), map('@'));
    override(\Yarfox\Container\Facade\Container::get(0), map('@'));
    override(\Yarfox\Container\Facade\Container::getInstance(0), map('@'));
    override(\Yarfox\Container\Container::get(0), map('@'));
    override(\Yarfox\Container\Container::getInstance(0), map('@'));

}
