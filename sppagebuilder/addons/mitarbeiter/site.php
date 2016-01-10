<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_mitarbeiter','sp_mitarbeiter_addon');

function sp_mitarbeiter_addon($atts, $content){

	extract(spAddonAtts(array(
		"title"					=> '',
		"text"					=> '',
		"position"				=> '',
		"avatar"				=> '',
		"class"					=> '',
		), $atts));

	ob_start();
	include('partials/mitarbeiter.php');
	return ob_get_clean();
}

