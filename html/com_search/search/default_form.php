<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');

$lang = JFactory::getLanguage();
$upper_limit = $lang->getUpperLimitSearchWord();
?>
<form id="searchForm" action="<?php echo JRoute::_('index.php?option=com_search');?>" method="post">

	<div class="input-group input-group-lg">

		<input type="text" name="searchword" placeholder="<?php echo JText::_('COM_SEARCH_SEARCH_KEYWORD'); ?>" id="search-searchword" size="30" maxlength="<?php echo $upper_limit; ?>" value="<?php echo $this->escape($this->origkeyword); ?>" class="inputbox form-control" />
		<span class="input-group-btn">
			<button name="Search" onclick="this.form.submit()" class="btn btn-success" title="<?php echo JHtml::tooltipText('COM_SEARCH_SEARCH');?>">
				<span class="fa fa-search"></span>
			</button>
		</span>

		<input type="hidden" name="task" value="search" />

	</div>

	<p>&nbsp;</p>
	<div class="row">
		<div class="col-sm-3">
			<div class="form-limit">
				<label for="limit">
					<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
				</label>
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		</div>
		<div class="col-sm-6 text-center">
			<?php if (!empty($this->searchword)):?>
				<p class="searchintro<?php echo $this->params->get('pageclass_sfx'); ?>">
					<?php echo JText::plural('COM_SEARCH_SEARCH_KEYWORD_N_RESULTS', '<span class="badge badge-info">' . $this->total . '</span>');?>
				</p>
			<?php endif;?>
		</div>
		<div class="col-sm-3 text-right">
			<?php echo $this->pagination->getPagesCounter(); ?>
		</div>
	</div>
	<p>&nbsp;</p>


</form>
