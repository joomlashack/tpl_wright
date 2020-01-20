<?php
/**
 * @package     Wright
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack.   All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
	<head>
		<w:head />
	</head>
	<body class="<?php echo $wrightBodyClass ?>">
		<?php
			if ($this->countModules('toolbar'))
				:
		?>
		<!-- toolbar -->
		<w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode ?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
		<?php
			endif;
		?>
		<div class="<?php echo $wrightContainerClass; ?>">
			<!-- header -->
			<header id="header" class="m-b-1 p-t-1">
				<div class="<?php echo $wrightGridMode; ?> clearfix">
					<w:logo name="top" />
					<div class="clear"></div>
				</div>
			</header>
			<?php
				if ($this->countModules('menu'))
					:
			?>
			<!-- menu -->
	   		<w:nav name="menu" />
			<?php
				endif;
			?>
			<!-- featured -->
			<?php
				if ($this->countModules('featured'))
					:
			?>
			<div id="featured" class="m-b-1">
				<w:module type="none" name="featured" />
			</div>
			<?php
				endif;
			?>
			<!-- grid-top -->
			<?php
				if ($this->countModules('grid-top'))
					:
			?>
			<div id="grid-top" class="m-b-1">
				<w:module type="<?php echo $wrightGridMode; ?>" name="grid-top" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-top2'))
					:
			?>
			<!-- grid-top2 -->
			<div id="grid-top2">
				<w:module type="<?php echo $wrightGridMode; ?>" name="grid-top2" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
			<div id="main-content" class="<?php echo $wrightGridMode; ?>">
				<!-- sidebar1 -->
				<aside id="sidebar1">
					<w:module name="sidebar1" />
				</aside>
				<!-- main -->
				<section id="main">
					<?php
						if ($this->countModules('above-content'))
							:
					?>
					<!-- above-content -->
					<div id="above-content">
						<w:module type="none" name="above-content" />
					</div>
					<?php
						endif;
					?>
					<?php
						if ($this->countModules('breadcrumbs'))
							:
					?>
					<!-- breadcrumbs -->
					<div id="breadcrumbs">
						<w:module name="breadcrumbs" chrome="none" />
					</div>
					<?php
						endif;
					?>
					<!-- component -->
					<w:content />
					<?php
						if ($this->countModules('below-content'))
							:
					?>
					<!-- below-content -->
					<div id="below-content" class="m-t-1">
						<w:module type="none" name="below-content" />
					</div>
					<?php
						endif;
					?>
				</section>
				<!-- sidebar2 -->
				<aside id="sidebar2">
					<w:module name="sidebar2" />
				</aside>
			</div>
			<?php
				if ($this->countModules('grid-bottom'))
					:
			?>
			<!-- grid-bottom -->
			<div id="grid-bottom" class="m-b-1">
				<w:module type="<?php echo $wrightGridMode; ?>" name="grid-bottom" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-bottom2'))
					:
			?>
			<!-- grid-bottom2 -->
			<div id="grid-bottom2">
				<w:module type="<?php echo $wrightGridMode; ?>" name="grid-bottom2" chrome="wrightflexgrid" />
			</div>
			<?php
				endif;
			?>
		</div>

		<!-- footer -->
		<div class="wrapper-footer">
		   <footer id="footer" <?php
			if ($this->params->get('stickyFooter', 1))
				:
				?> class="sticky"<?php
			endif;
				?>>

				<?php
					if ($this->countModules('bottom-menu'))
					:
				?>
				<!-- bottom-menu -->
				<w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode ?>" name="bottom-menu" wrapClass="navbar-inverse navbar-transparent" />
				<?php
					endif;
				?>

		   	<div class="<?php echo $wrightContainerClass; ?> footer-content p-t-1">
			   	<?php
						if ($this->countModules('footer'))
						:
					?>
					<w:module type="<?php echo $wrightGridMode; ?>" name="footer" chrome="wrightflexgrid" />
				 	<?php
						endif;
					?>
					<w:footer />
				</div>
		   </footer>
		</div>
    <w:module type="none" name="debug" chrome="none" />
	</body>
</html>
