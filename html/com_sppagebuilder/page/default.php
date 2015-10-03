<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

// jQuery will be added by the template
//JHtml::_('jquery.framework');

require_once ( JPATH_COMPONENT . '/parser/addon-parser.php' );

$doc = JFactory::getDocument();


$app = JFactory::getApplication();
$menus		= $app->getMenu();
$menu = $menus->getActive();

$menuClassPrefix = '';
$showPageHeading = 0;

// check active menu item
if ($menu) {
    $menuClassPrefix 	= $menu->params->get('pageclass_sfx');
    $showPageHeading 	= $menu->params->get('show_page_heading');
    $menuheading 		= $menu->params->get('page_heading');
}

$page = $this->data;
$content = json_decode($page->text);
$fullwidth = $page->page_layout;
?>

    <div id="sp-page-builder" class="sp-page-builder <?php echo $menuClassPrefix; ?> page-<?php echo $page->id; ?>">
        <?php if($showPageHeading){ ?>
            <div class="page-header">
                <h1 itemprop="name">
                    <?php
                    if($menuheading)
                    {
                        echo $menuheading;
                    } else {
                        echo $page->title;
                    }
                    ?>
                </h1>
            </div>
        <?php } ?>

        <div class="page-content">
            <?php
            /*
             The problem here is that the default addon parser returns html containing prefixed classes like 'sppb-row'.
             TODO: We should write our own parser instead of preprocessing the output here
            */
            $addons = AddonParser::viewAddons($content,$fullwidth);
            $addons = str_replace('sppb-row','row',$addons);
            $addons = str_replace('sppb-col-', 'col-', $addons);
            echo $addons ?>
        </div>
    </div>

<?php
// we're going to use our own page builder js and concatenate it with our other template js files
// $doc->addScript(JUri::base(true).'/components/com_sppagebuilder/assets/js/sppagebuilder.js');
