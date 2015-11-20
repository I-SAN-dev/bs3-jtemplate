<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_empty_space','sp_empty_space_addon');

function sp_empty_space_addon($atts){

	extract(spAddonAtts(array(
		'gap'		=> '20',
		'hidden_md'	=> '',
		'hidden_sm'	=> '',
		'hidden_xs'	=> '',
		'class'		=> '',
		), $atts));

	//Responsive utilities
	if($hidden_md) $class .= $class . ' hidden-md hidden-lg';
	if($hidden_sm) $class .= $class . ' hidden-sm';
	if($hidden_xs) $class .= $class . ' hidden-xs';

	ob_start();
	include('partials/empty_space.php');
	return ob_get_clean();
}