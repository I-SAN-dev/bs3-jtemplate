
<div class="sppb-addon sppb-addon-text-block <?= $alignment ?> <?= $class ?>">
    <?php if($title): ?>
        <<?= $heading_selector ?> class="sppb-addon-title"><?= $title ?></<?= $heading_selector ?>>
    <?php endif; ?>

    <div class="sppb-addon-content">
        <?= $text ?>
    </div>
</div>

