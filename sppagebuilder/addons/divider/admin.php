<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_divider',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_DIVIDER'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_DIVIDER_DESC'),
		'attr'=>array(

			'margin_top'=>array(
				'type' => 'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_DIVIDER_MARGIN_TOP'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_DIVIDER_MARGIN_TOP_DESC'),
				'placeholder' => '30',
				'std' => '30',
				),			

			'margin_bottom'=>array(
				'type' => 'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_DIVIDER_MARGIN_BOTTOM'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_DIVIDER_MARGIN_BOTTOM_DESC'),
				'placeholder' => '30',
				'std' => '30',
				),

			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			)
		)
	);