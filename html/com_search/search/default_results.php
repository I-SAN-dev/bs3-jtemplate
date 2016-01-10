<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="list-group">
	<?php foreach ($this->results as $result) : ?>
		<div class="list-group-item">

			<?php if ($result->section) : ?>
				<span class="badge">
					<?php echo $this->escape($result->section); ?>
				</span>
			<?php endif; ?>

			<h4 class="list-group-item-heading">
				<?php if ($result->href) :?>
					<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>
						<?php echo $this->escape($result->title);?>
					</a>
				<?php else:?>
					<?php echo $this->escape($result->title);?>
				<?php endif; ?>
			</h4>

			<div class="list-group-item-text">
				<?php echo $result->text; ?>
			</div>

		</div>
	<?php endforeach; ?>
</div>



<div class="pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
