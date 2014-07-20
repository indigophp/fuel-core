<?php

/*
 * This file is part of the Indigo Core package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Autoloader::add_core_namespace('Indigo\\Core');

/**
 * Core Extensions
 */
Autoloader::add_classes(array(
	/**
	 * Image class extensions
	 */
	'Indigo\\Core\\Image'         => __DIR__ . '/classes/image.php',
	'Indigo\\Core\\Image_Driver'  => __DIR__ . '/classes/image/driver.php',
	'Indigo\\Core\\Image_Gd'      => __DIR__ . '/classes/image/gd.php',
	'Indigo\\Core\\Image_Imagick' => __DIR__ . '/classes/image/imagick.php',

	/**
	 * Core extensions
	 */
	'Indigo\\Core\\Module' => __DIR__ . '/classes/module.php',
	'Indigo\\Core\\Theme'  => __DIR__ . '/classes/theme.php',
));
