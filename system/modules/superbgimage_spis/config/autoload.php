<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package    SuperBGImages_SPIS
 * @copyright  DevPoint | Wilfried Reiter 2013
 * @author     DevPoint | Wilfried Reiter <wilfried.reiter@devpoint.at>
 * @link       http://contao.org
 * @license    MIT
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'ModuleSuperBGImageSPIS' => 'system/modules/superbgimage_spis/modules/ModuleSuperBGImageSPIS.php'
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_superbgimage_spis'			=> 'system/modules/superbgimage_spis/templates',
	'js_superbgimage_spis'			=> 'system/modules/superbgimage_spis/templates'
));
