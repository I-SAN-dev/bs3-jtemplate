<div class="sppb-addon sppb-addon-testimonial <?= $class ?>">
    <?php if($title): ?>
        <<?= $heading_selector ?> class="sppb-addon-title"><?= $title ?></<?= $heading_selector ?>>
    <?php endif; ?>

    <div class="sppb-addon-content">

        <div class="media">
            <?php if($avatar): ?>
                <a href="<?= $link ?>" target="<?= $link_target ?>" class="pull-<?= $avatar_position ?>">
                    <img src="<?= $avatar ?>" alt="<?= $name ?>" class="media-object" width="<?= $avatar_width ?>"/>
                </a>
            <?php endif; ?>

            <div class="media-body">
                <blockquote class="<?= ($avatar_position == 'right')?'blockquote-reverse':'' ?>">
                    <?= $review ?>
                    <footer>
                        <a href="<?= $link ?>" target="<?= $link_target ?>">
                            <cite>
                                <strong><?= $name ?></strong> <?= $company ?>
                            </cite>
                        </a>
                    </footer>
                </blockquote>
            </div>

        </div>

    </div>
</div>

