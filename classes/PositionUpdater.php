<?php
/**
 * Updates available Template Positions
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


class PositionUpdater {

    /**
     * @var string $layoutPath - the path where the layouts are stored
     */
    protected static $layoutPath = '/layouts/';


    /**
     * Checks if the CSS has to be compiled and compiles it if necessary
     * @return String $message
     */
    public static function update($template)
    {
        $layouts_path = 'templates/'.$template.self::$layoutPath;

        try {

            /* Get all layout files */
            $files = array();
            foreach (glob($layouts_path . '*.php') as $file) {
                $files[basename($file, '.php')] = $file;
            }

            $allpositions = array();
            $filepositions = array();

            /* parse all layout files */
            foreach ($files as $key => $path) {
                $positions = array();

                // Get html content, strip php first
                $html = preg_replace(array('/<(\?|\%)\=?(php)?/', '/(\%|\?)>/'), array('', ''), file_get_contents($path));
                $dom = new DOMDocument();
                $dom->loadHTML($html);

                // Check for positions
                foreach ($dom->getElementsByTagName('include') as $jdoc) {
                    if ($jdoc->getAttribute('type') == 'modules') {
                        $positions[] = $jdoc->getAttribute('name');
                    }
                }

                // Save the positions
                $filepositions[$key] = array();
                foreach ($positions as $position) {
                    $filepositions[$key][$position] = true;
                    $allpositions[$position] = true;
                }
            }

            $message = "Successfully checked " . count($files) . " layout files, found " . count($allpositions) . " module positions and added them to the templateDetails.xml";


            // get templateDetails file
            $templateDetailsPath = 'templates/' . $template . '/templateDetails.xml';
            $xml = new DOMDocument();
            $xml->load($templateDetailsPath);
            //Get positions
            $positionnode = $xml->getElementsByTagName('positions')->item(0);
            // Remove old positions
            $positionnode->nodeValue = '';
            // Add all positions
            foreach($allpositions as $key=>$exists)
            {
                $positionnode->appendChild($xml->createElement('position', $key));
            }
            $positionnode->appendChild($xml->createElement('position', 'debug'));

            // Save the file
            file_put_contents($templateDetailsPath, $xml->saveXML());

        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
        }

        ob_start();
        include('positionupdater/message.php');
        return ob_get_clean();


    }

}