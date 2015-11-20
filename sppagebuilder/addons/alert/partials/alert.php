
<div class="sppb-addon sppb-addon-alert <?= $class ?>">
    <?php if($title): ?>
        <<?= $heading_selector ?> class="sppb-addon-title">
            <?= $title ?>
        </<?= $heading_selector ?>>
    <?php endif; ?>

    <div class="sppb-addon-content">
        <div class="alert alert-<?= $type ?> fade in" role="alert">
            <?php if($close=='yes'): ?>
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
            <?php endif; ?>
            <?= $text ?>
        </div>
    </div>
</div>

