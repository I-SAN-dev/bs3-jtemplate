<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_image','sp_image_addon');

function sp_image_addon($atts) {
	extract(spAddonAtts(array(
		'title' 				=> '',
		"heading_selector" 		=> 'h3',
		'image' 				=> '',
		'alt_text' 				=> '',
		'position' 				=> '',
		'link' 					=> '',
		'target' 				=> '',
		'class' 				=> '',
		), $atts));

	ob_start();
	include('partials/image.php');
	return ob_get_clean();

}