<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_video','sp_video_addon');

function sp_video_addon($atts){

	extract(spAddonAtts(array(
		"title" 				=> '',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',		
		"url"					=> '',
		"class"					=> '',
		), $atts));

	if($url)
	{
		$video = parse_url($url);
		switch($video['host']) {
			case 'youtu.be':
				$id = trim($video['path'],'/');
				$src = '//www.youtube.com/embed/' . $id;
			break;
			
			case 'www.youtube.com':
			case 'youtube.com':
				parse_str($video['query'], $query);
				$id = $query['v'];
				$src = '//www.youtube.com/embed/' . $id;
			break;
			
			case 'vimeo.com':
			case 'www.vimeo.com':
				$id = trim($video['path'],'/');
				$src = '//player.vimeo.com/video/' . $id;
		}

		ob_start();
		include('partials/video.php');
		return ob_get_clean();

	}

	return '';

}