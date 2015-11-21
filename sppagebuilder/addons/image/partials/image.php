
<?php if($image): ?>
    <div class="sppb-addon sppb-addon-single-image <?= $position ?> <?= $class ?>">
        <?php if($title): ?>
            <<?= $heading_selector ?> class="sppb-addon-title">
                <?= $title ?>
            </<?= $heading_selector ?>>
        <?php endif; ?>

        <div class="sppb-addon-content">

            <?php if($link): ?>
                <a href="<?= $link ?>" target="<?= $target ?>">
            <?php endif; ?>

            <img src="<?= $image ?>" alt="<?= $alt_text ?>" class="img-responsive">

            <?php if($link): ?>
                </a>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>


