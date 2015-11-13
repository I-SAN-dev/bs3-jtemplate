<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_accordion','sp_accordion_addon');
AddonParser::addAddon('sp_accordion_item','sp_accordion_item_addon');

$sppbAccordionStyle = '';

function sp_accordion_addon($atts, $content){

	global $sppbAccordionStyle;
	global $sppbAccordionId;

	extract(spAddonAtts(array(
		"title"					=>'',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',		
		"style"					=> 'panel-default',
		"class"					=> '',
		"tagNumber"				=> ''
		), $atts));

	$sppbAccordionStyle = $style;
	$sppbAccordionId = 'accordion-'.$tagNumber;

	$content = AddonParser::spDoAddon($content);

	ob_start();
	include('partials/accordion.php');
	$output = ob_get_clean();

	$sppbAccordionStyle = '';
	$sppbAccordionId = '';

	return $output;

}

function sp_accordion_item_addon( $atts ){

	global $sppbAccordionStyle;
	global $sppbAccordionId;

	extract(spAddonAtts(array(
		"title"=>'',
		"icon"=>'',
		'content'=>'',
		'tagNumber' => ''
		), $atts));

	if($icon!='') {
		$title = '<i class="fa ' . $icon . '"></i> ' . $title;
	}
	
	ob_start();
	include('partials/accordion-item.php');
	return ob_get_clean();
}