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
		'addon_name'=>'sp_feature',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_DESC'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>'Title',
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
				'std'=>  'Feature Box'
				),

			'heading_selector'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
				'values'=>array(
					'h1'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
					'h2'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
					'h3'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
					'h4'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
					'h5'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
					'h6'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
					),
				'std'=>'h3',
			),


			'url'=>array(
				'type'=>'text',
				'title'=>'Link',
				'desc'=>'Enter the URL the Feature Box should link to. Leave blank if not required.',
				'placeholder'=>'http://',
				'std'=>''
				),

			'title_position'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_ICON_IMAGE_POSITION'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_ICON_IMAGE_POSITION_DESC'),
				'values'=>array(
					'iht'=>'Image-Heading-Text',
					'hit'=>'Heading-Image-Text',
					'hti'=>'Heading-Text-Image'
					),
				'std'=>'iht'
				),

			'feature_type'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE_DESC'),
				'values'=> array(
					'icon'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE_ICON'),
					'image'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE_IMAGE'),
					),
				'std' => 'icon'
				),

			'feature_image'=>array(
				'type' => 'media',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_IMAGE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_IMAGE_DESC'),
				'std' => ''
				),

			'icon_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
				'std'=> ''
				),

			'text'=>array(
				'type'=>'textarea',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum.'
				),

			'alignment'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT_DESC'),
				'values'=>array(
					'text-left'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_LEFT'),
					'text-center'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CENTER'),
					'text-right'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RIGHT'),
					),
				'std'=>'text-center',
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