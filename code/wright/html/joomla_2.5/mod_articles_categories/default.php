<?php
// Wright v.3 Override: Joomla 2.5.18
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_categories
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

$wrightHorizontal = (isset($wrightHorizontal) ? $wrightHorizontal : false);  // Wright v.3: Enable positio horizontal parameter
// no direct access
defined('_JEXEC') or die;
?>
<?php if($wrightHorizontal){ ?>
	<div class="container-fluid">
   		<?php
			require JModuleHelper::getLayoutPath('mod_articles_categories', $params->get('layout', 'default').'_items');
		?>
	</div>
<?php }else{ ?>
	<ul class="categories-module<?php echo $moduleclass_sfx; ?> nav nav-list">  <?php // Wright v.3: Added nav nav-list classes ?>
		<?php
		require JModuleHelper::getLayoutPath('mod_articles_categories', $params->get('layout', 'default').'_items');
		?>
	</ul>
<?php } ?>