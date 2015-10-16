<?php
/**
 * Description
 *
 * This file is part of the Joomla Bootstrap3 Template from I-SAN.de
 *
 * @author Sebastian Antosch <s.antosch@i-san.de>
 * @copyright 2015 I-SAN.de Webdesign & Hosting GbR
 * @link http://i-san.de
 *
 * @license MIT
 */
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');


class HeadCleaner {

    /**
     * Removes all parts of the Header Data defined in HeadCleanerRemove.txt
     */
    public static function render($tags, $template)
    {
        $configPath = 'templates/'.$template.'/classes/HeadCleanerRemove.txt';
        $text = $tags;

        if($config = file($configPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
        {
            foreach($config as $line)
            {
                $string = trim($line);
                if(strlen($string)>0 && $string[0]!=';')
                {
                    $text = str_ireplace($string,'',$text);
                }
            }
        }

        echo($text);
    }

}