<div class="sppb-addon sppb-addon-accordion <?= $class ?>">
    <?php if($title): ?>
     <<?= $heading_selector ?> class="sppb-addon-title"><?= $title ?></<?= $heading_selector ?>>
    <?php endif; ?>

    <div class="sppb-addon-content">
        <div class="panel-group" id="<?= $sppbAccordionId ?>">
            <?= $content ?>
        </div>
    </div>
</div>