<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_feature','sp_feature_addon');

function sp_feature_addon($atts){

	extract(spAddonAtts(array(
		"title"					=> '',
		"heading_selector" 		=> 'h3',
		"url"					=> '',
		"title_position"		=> 'iht',
		"feature_type"			=> 'icon',
		"feature_image"			=> '',
		'icon_name' 			=> '',
		'text'					=> '',
		'alignment' 			=> '',
		'class'					=> '',
		), $atts));



	$boxtag = 'div';
	$boxendtag = 'div';
	if($url)
	{
		$boxtag = 'a href="'.$url.'" ';
		$boxendtag = 'a';
	}

	//Icon or Image
	ob_start();
	include('partials/iconimage.php');
	$media = ob_get_clean();


	//Title
	ob_start();
	include('partials/title.php');
	$feature_title = ob_get_clean();


	//Content
	ob_start();
	include('partials/content.php');
	$feature_text = ob_get_clean();


	//Feature
	ob_start();
	include('partials/feature.php');
	return ob_get_clean();
}