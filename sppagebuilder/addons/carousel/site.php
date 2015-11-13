<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_carousel','sp_carousel_addon');
AddonParser::addAddon('sp_carousel_item','sp_carousel_item_addon');

function sp_carousel_addon($atts, $content){

	extract(spAddonAtts(array(
		'autoplay'=>'',
		'controllers'=>'',
		'arrows'=>'',
		'alignment'=>'',
		'class'=>'',
		'tagNumber'=>''
		), $atts));

	$carousel_autoplay = ($autoplay)?'data-ride="carousel"':'';

	// Get number of slides
	$numberOfSlides = substr_count($content, '[sp_carousel_item');

	// Make all slides inactive
	$content = str_replace('[sp_carousel_item', '[sp_carousel_item active="0"', $content);
	// Make the first slide active
	$content = preg_replace('/active="0"/','active="1"', $content, 1);

	$slides = AddonParser::spDoAddon($content);

	ob_start();
	include('partials/carousel.php');
	return ob_get_clean();

}


function sp_carousel_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"=>'',
		"active"=>'',
		"bg"=>'',
		'content'=>'',
		"button_text"=>'',
		"button_url"=>'',
		"button_size" => '',
		"button_type"=>'',
		"button_icon"=>'',
		), $atts));


	if($button_icon) {
		$button_text = '<i class="fa ' . $button_icon . '"></i> ' . $button_text;
	}

	$has_bg = ($bg ? ' sppb-item-has-bg' : '');
	$is_active = ($active=='1' ? ' active' : '');

	ob_start();
	include('partials/carousel-item.php');
	return ob_get_clean();

}