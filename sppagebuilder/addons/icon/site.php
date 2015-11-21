<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_icon','sp_icon_addon');

function sp_icon_addon($atts) {
	extract(spAddonAtts(array(
		'name' => '',
		'alignment' => '',
		'class' => '',
		), $atts));

	ob_start();
	include('partials/icon.php');
	return ob_get_clean();

}