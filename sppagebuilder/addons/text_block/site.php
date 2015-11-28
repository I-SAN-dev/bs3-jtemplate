<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_text_block','sp_text_block_addon');

function sp_text_block_addon($atts){

	extract(spAddonAtts(array(
		"title"					=>'',
		"heading_selector" 		=> 'h3',
		"text"					=>'',
		"alignment"				=>'',
		'class'					=>'',
		), $atts));

	
	ob_start();
	include('partials/text_block.php');
	return ob_get_clean();
}