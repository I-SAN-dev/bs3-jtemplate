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


$doc->addScript($templatePath . '/js/template.js');

// Add Stylesheets
CssRenderer::render($this->template);
$doc->addStyleSheet($templatePath . '/css/template.css');


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Joomla head data -->
    <jdoc:include type="head" />

    <!-- Metadata -->
    <?php
    // TODO: let's add additional metadata and icons etc which are not provided by Joomla
    // echo $metadata ?>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <?php if($this->countModules('navbar')): ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <jdoc:include type="modules" name="navbar" style="none" />
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <?php
            $multiCol = $this->countModules('right');
            $mainCol = $multiCol ? '12' :  '8';
            ?>
            <div class="col-sm-<?php echo $mainCol; ?>">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
            <?php if($multiCol): ?>
            <div class="col-sm-4">
                <jdoc:include type="modules" name="right" style="none" />
            </div>
            <?php endif; ?>
        </div>

    </div><!-- /.container -->
</body>
</html>