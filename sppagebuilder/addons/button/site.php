<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_button','sp_button_addon');

function sp_button_addon($atts, $content){

	extract(spAddonAtts(array(
		"text" => '',
		"url" => '',
		"size" => '',
		"type"=>'',
		"icon"=>'',
		"target"=>'',
		"align"=>'',
		"block"=>'',
		"class"=>''
		), $atts));

	if($icon !='') {
		$text = '<i class="fa ' . $icon . '"></i> ' . $text;
	}

	ob_start();
	require('partials/button.php');
	return ob_get_clean();
	
}