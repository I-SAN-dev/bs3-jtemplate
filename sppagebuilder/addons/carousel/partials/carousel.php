<div class="carousel slide <?= $class ?> " <?= $carousel_autoplay ?> >
    <?php if($controllers): ?>
        <ol class="carousel-indicators">
            <?php for($i = 0; $i<$numberOfSlides; $i++): ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>" <?= ($i == 0)?: 'class="active"' ?>></li>
            <?php endfor; ?>
        </ol>
    <?php endif; ?>

    <div class="carousel-inner <?= $alignment ?>">
        <?= $slides ?>
    </div>

    <?php if($arrows): ?>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <?php endif; ?>
</div>