<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_tab','sp_tab_addon');
AddonParser::addAddon('sp_tab_item','sp_tab_item_addon');

$sppbTabArray = array();

function sp_tab_addon($atts, $content){
	global $sppbTabArray;

	extract(spAddonAtts(array(
		"title"					=> '',
		"heading_selector" 		=> 'h3',
		"style"					=> '',
		"class"					=> '',
		"tagNumber"				=> ''
		), $atts));

	AddonParser::spDoAddon($content);

	ob_start();
	include('partials/tabs.php');
	return ob_get_clean();
}

function sp_tab_item_addon( $atts ){
	global $sppbTabArray;

	extract(spAddonAtts(array(
		"title"=>'',
		"icon"=>'',
		'content'=>''
		), $atts));

	if($icon!='') {
		$icon = '<i class="fa ' . $icon . '"></i> ';
	}

	$sppbTabArray[] = array('title'=>$title, 'icon'=>$icon, 'content'=>$content);
}