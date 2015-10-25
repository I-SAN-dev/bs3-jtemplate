<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.scheller-tpl
 *
 * @copyright   Copyright (C) 2015 I-SAN.de Webdesign & Hosting GbR, Sebastian Antosch and Christian Baur. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once('classes/CssRenderer.php');

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$templatePath = $this->baseurl . '/templates/' . $this->template;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');


// Add Scripts
JHtml::_('jquery.framework', false); // Here we load jQuery - NOT in no-conflict mode, cause no-conflict mode sucks
JHtml::_('bootstrap.framework'); // Here we enable the integration of Bootstrap - but we override the assets! Ha!
$doc->addScript($templatePath . '/js/template.js');

// Add Stylesheets
CssRenderer::render($this->template); // We re-render our SASS first if necessary
$doc->addStyleSheet($templatePath . '/css/template.css'); // We add the compiled CSS

// Remove unnecessary crap
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);

// Remove inline caption script
if (isset($this->_script['text/javascript']))
{
    $this->_script['text/javascript'] = preg_replace('%window\.addEvent\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script['text/javascript']);
    if (empty($this->_script['text/javascript']))
        unset($this->_script['text/javascript']);
}
//Remove generator
$this->setGenerator(NULL);

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Joomla head data! -->
    <jdoc:include type="head" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Metadata -->
    <?php
    // TODO: let's add additional metadata and icons etc which are not provided by Joomla
    // echo $metadata ?>

    <!-- Icons & Platformstuff -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/assets/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/assets/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/assets/icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/assets/icons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/assets/icons/manifest.json">
    <link rel="shortcut icon" href="/assets/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="<?= $color ?>">
    <meta name="msapplication-TileImage" content="/assets/icons/mstile-144x144.png">
    <meta name="msapplication-config" content="/assets/icons/browserconfig.xml">
    <meta name="theme-color" content="<?= $color ?>">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= $applestatusbarstyle ?>" />




</head>
<body>
    <?php
        // we have another file for the html-template, because here, we just collect data
        include('template.php');
    ?>
</body>
</html>