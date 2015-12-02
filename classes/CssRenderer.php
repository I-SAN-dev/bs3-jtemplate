<?php
/**
 * Renders SCSS
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
use Leafo\ScssPhp;

class CssRenderer {

    /**
     * @var string $cssPath - the path where the compiled css file shall be stored
     */
    protected static $cssPath = '/css/template.css';

    /**
     * @var string $scssPath - the path to the scss file that shall be compiled - no .scss at the end!
     */
    protected static $scssPath = '/css/scss/template';

    /**
     * Checks if the CSS has to be compiled and compiles it if necessary
     */
    public static function render($template)
    {
        $css_path = 'templates/'.$template.self::$cssPath;
        /*
         * We need an additional autoloader for the ScssPhp Framework,
         * because it relies on that we have one if we use the new non-deprecated namespaced approach
         */
        spl_autoload_register(function($class){
            //load file from namespace
            $class = str_replace('\\','/', $class).'.php';
            $class = str_replace('Leafo/ScssPhp', __DIR__.'/scssphp/src', $class);
            if(file_exists($class))
            {
                require_once($class);
            }
        });

        /*
         * Crossplattform getallheaders method
         */
        if (!function_exists('getallheaders'))
        {
            function getallheaders()
            {
                $headers = '';
                foreach ($_SERVER as $name => $value)
                {
                    if (substr($name, 0, 5) == 'HTTP_')
                    {
                        $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
                    }
                }
                return $headers;
            }
        }

        /*
         * Render SCSS if necessary
         */
        $headers = getallheaders();
        $forceRefresh = ($headers['Cache-Control'] == "no-cache" || $headers["Pragma"] == "no-cache" || isset($_GET['nocache']));
        if(!file_exists($css_path) || $forceRefresh)
        {
            $scss = '@import "templates/'.$template.self::$scssPath.'";';
            $scssc = new \Leafo\ScssPhp\Compiler();
            $css = $scssc->compile($scss);
            file_put_contents($css_path, $css);
        }

    }

}