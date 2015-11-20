<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_divider','sp_divider_addon');

function sp_divider_addon($atts, $content){

	extract(spAddonAtts(array(
		'margin_top'			=> '',
		'margin_bottom'			=> '',
		'class'					=> '',
		), $atts));

	$style 						= '';

	if($margin_top) $style .= 'margin-top:' . (int) $margin_top  . 'px;';

	if($margin_bottom) $style .= 'margin-bottom:' . (int) $margin_bottom  . 'px;';

	ob_start();
	include('partials/divider.php');
	return ob_get_clean();
}