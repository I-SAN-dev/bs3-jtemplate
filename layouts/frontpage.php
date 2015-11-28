<?php defined('_JEXEC') or die; ?>

<?php if($this->countModules('navbar')): ?>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><?= $sitename ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <jdoc:include type="modules" name="navbar" style="none" />
            </div><!--/.nav-collapse -->
        </div>
    </nav>
<?php endif; ?>

<div class="container">

            <jdoc:include type="message" />
            <jdoc:include type="component" />

</div><!-- /.container -->

