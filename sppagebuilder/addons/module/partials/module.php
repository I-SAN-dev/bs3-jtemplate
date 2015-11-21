
<?php if($modulehtml):?>
    <div class="sppb-addon sppb-addon-module <?= $class ?>">
        <?php if($title): ?>
            <<?= $heading_selector ?> class="sppb-addon-title">
                <?= $title ?>
            </<?= $heading_selector ?>>
        <?php endif; ?>

        <div class="sppb-addon-content">
            <?= $modulehtml ?>
        </div>
    </div>
<?php endif; ?>

