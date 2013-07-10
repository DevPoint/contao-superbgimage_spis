<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @package    SuperBGImages_SPIS
 * @copyright  DevPoint | Wilfried Reiter 2013
 * @author     DevPoint | Wilfried Reiter <wilfried.reiter@devpoint.at>
 * @license    MIT
 */

class ModuleSuperBGImageSPIS extends SimplePageImages {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_superbgimage_spis';

    /**
     * Generate module
     */
    protected function compile() 
    {
        $recursive = ($this->simplepageimages_recursive) ? true : false;
        $this->Template->images = $this->findPageImages($recursive);
        if (null !== $this->Template->images)
        {
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/superbgimage_spis/assets/js/jquery.superbgimage.min.js|static';
        }
    }
}
