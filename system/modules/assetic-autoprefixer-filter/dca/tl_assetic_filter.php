<?php

/**
 * Assetic Autoprefixer filter integration for Contao Open Source CMS.
 *
 * @copyright  2014 bit3 UG <http://bit3.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    bit3/contao-assetic-autoprefixer-filter
 * @license    LGPL-3.0+ <http://www.gnu.org/licenses/lgpl-3.0.html>
 */

/**
 * Table tl_assetic_filter
 */
$GLOBALS['TL_DCA']['tl_assetic_filter']['metapalettes']['autoprefixer'] = array(
	'filter'       => array('type', 'note'),
	'autoprefixer' => array('autoprefixer_cascade', 'autoprefixer_safe'),
	'status'       => array('disabled', 'notInDebug'),
);

$GLOBALS['TL_DCA']['tl_assetic_filter']['fields']['autoprefixer_cascade'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['autoprefixer_cascade'],
	'default'   => true,
	'inputType' => 'checkbox',
	'exclude'   => true,
	'eval'      => array('tl_class' => 'w50'),
	'sql'       => "char(1) NOT NULL default '1'",
);

$GLOBALS['TL_DCA']['tl_assetic_filter']['fields']['autoprefixer_safe'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['autoprefixer_safe'],
	'inputType' => 'checkbox',
	'exclude'   => true,
	'eval'      => array('tl_class' => 'w50'),
	'sql'       => "char(1) NOT NULL default ''",
);
