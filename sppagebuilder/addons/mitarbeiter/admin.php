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
		'addon_name'=>'sp_mitarbeiter',
		'title'=>'Mitarbeiter',
		'desc'=>'Stellt einen Mitarbeiter vor',
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>'Name',
				'desc'=>'Der Name des Mitarbeiters',
				'std'=>  ''
				),
			'text'=>array(
				'type'=>'editor',
				'title'=>'Text',
				'desc'=>'Vorstellung des Mitarbeiters',
				'std'=>'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.'
				),
			'position'=>array(
				'type'=>'text', 
				'title'=>'Position',
				'desc'=>'Die Position des Mitarbeiters im Unternehmen',
				'std'=>  '',
				),  
			'avatar'=>array(
				'type'=>'media', 
				'title'=>'Bild',
				'desc'=>'Ein Porträt des Mitarbeiters',
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