<?php
/**
 * @category     Scandiweb
 * @package      Scandiweb_Test
 * @author       Andrii Baranov <info@scandiweb.com>
 * @copyright    Copyright (c) 2022 Scandiweb, Ltd (http://scandiweb.com)
 */

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Scandiweb_Test',
    __DIR__
);
