<?php

/**
 * Assetic Autoprefixer filter for Contao Open Source CMS.
 *
 * @copyright  2014 bit3 UG <http://bit3.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    bit3/contao-autoprefixer-filter
 * @license    LGPL-3.0+ <http://www.gnu.org/licenses/lgpl-3.0.html>
 */


/**
 * Assetic compiler filter
 */
$GLOBALS['ASSETIC']['compiler']['autoprefixer'] = 'Bit3\Assetic\Filter\Autoprefixer\AutoprefixerFilter';

/**
 * Assetic css compatible filters
 */
$GLOBALS['ASSETIC']['css'][] = 'autoprefixer';

/**
 * Event subscriber
 */
$GLOBALS['TL_EVENT_SUBSCRIBERS'][] = 'Bit3\Contao\Assetic\Autoprefixer\FilterFactory';
