<?php
/**
 * @package     Wright
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

if (version_compare(JVERSION, '4', 'lt')) {

	// Menu classes for Joomla 3
	$toolbarMenuClasses = 'navbar-fixed-top navbar-inverse';
	$mainMenuClasses    = '';
	$bottomMenuClasses  = 'navbar-inverse navbar-transparent';
}
else {

	// Menu classes for Joomla 4
	$toolbarMenuClasses = 'navbar-light bg-light fixed-top';
	$mainMenuClasses    = 'navbar-dark bg-dark m-b-1';
	$bottomMenuClasses  = 'navbar-dark';
}