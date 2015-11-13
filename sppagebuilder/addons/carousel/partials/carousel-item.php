<div class="item  <?= $is_active ?> <?= $has_bg ?>">
    <?php if($bg): ?>
        <img src="<?= $bg ?>" alt="<?= $title ?>">
    <?php endif; ?>
    <div class="sppb-carousel-item-inner">
        <div class="carousel-caption">
            <div class="sppb-carousel-pro-text">
                <?php if($title != ''): ?>
                    <h3><?= $title ?></h3>
                <?php endif; ?>
                <?php if($content != ''): ?>
                    <p><?= $content ?></p>
                <?php endif; ?>
                <?php if($button_text != '' && $button_url != ''): ?>
                    <a href="<?= $button_url ?>" class="btn btn-<?= $button_type ?> btn-<?= $button_size ?>" role="button">
                        <?= $button_text ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>