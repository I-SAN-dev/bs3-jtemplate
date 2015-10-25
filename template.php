<?php defined('_JEXEC') or die; ?>

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
        $mainCol = $multiCol ? '8' :  '12';
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

