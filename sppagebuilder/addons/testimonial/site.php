<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_testimonial','sp_testimonial_addon');

function sp_testimonial_addon($atts, $content){

	extract(spAddonAtts(array(
		"title"					=> '',
		"heading_selector" 		=> 'h3',
		"review"				=> '',
		"name"					=> '',
		"company"				=> '',
		"avatar"				=> '',
		"avatar_width"			=> '',
		"avatar_position"		=> 'left',
		"link"					=> '',
		"link_target"			=> '',
		"class"					=> '',
		), $atts));

	ob_start();
	include('partials/testimonial.php');
	return ob_get_clean();
}

