
<<?= $boxtag ?> class="sppb-addon sppb-addon-feature <?= $alignment ?> <?= $class ?>">
    <div class="sppb-addon-content">
        <?php if($title_position == 'iht'): ?>

            <?= $media ?>
            <?= $feature_title ?>
            <?= $feature_text ?>

        <?php elseif($title_position == 'hit'): ?>

            <?= $feature_title ?>
            <?= $media ?>
            <?= $feature_text ?>

        <?php else: ?>

            <?= $feature_title ?>
            <?= $feature_text ?>
            <?= $media ?>

        <?php endif; ?>
    </div>
</<?= $boxendtag ?>>

