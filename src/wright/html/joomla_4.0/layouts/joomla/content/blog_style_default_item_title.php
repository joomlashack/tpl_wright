<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2019 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

// Create a shortcut for params.
$params = $displayData->params;
$canEdit = $displayData->params->get('access-edit');
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
// @TODO Look for a replacement for "JHtml::_('behavior.framework')" if exists
//JHtml::_('behavior.framework');
?>

	<?php if ($params->get('show_title') || $displayData->state == 0 || ($params->get('show_author') && !empty($displayData->author ))) : ?>
		<?php // <div class="page-header"> Wright v.4: Removed page-header ?>

			<?php if ($params->get('show_title')) : ?>
				<h2>
					<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
						<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($displayData->slug, $displayData->catid)); ?>">
						<?php echo $this->escape($displayData->title); ?></a>
					<?php else : ?>
						<?php echo $this->escape($displayData->title); ?>
					<?php endif; ?>
				</h2>
			<?php endif; ?>

            <?php if ($displayData->state == 0) : ?>
				<span class="badge badge-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
			<?php endif; ?>
            <?php if (strtotime($displayData->publish_up) > strtotime(Factory::getDate())) : ?>
				<span class="badge badge-warning"><?php echo JText::_('JNOTPUBLISHEDYET'); ?></span>
			<?php endif; ?>
            <?php if ($displayData->publish_down !== null && strtotime($displayData->publish_down) < strtotime(Factory::getDate())) : ?>
				<span class="badge badge-warning"><?php echo JText::_('JEXPIRED'); ?></span>
		<?php endif; ?>
		<?php // </div> Wright v.4: Removed page-header ?>
	<?php endif; ?>
