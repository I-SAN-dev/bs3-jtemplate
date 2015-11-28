
<div class="sppb-addon sppb-addon-video">
    <?php if($title): ?>
        <<?= $heading_selector ?> class="sppb-addon-title"><?= $title ?></<?= $heading_selector ?>>
    <?php endif; ?>

    <div class="sppb-video-block embed-responsive-embed-responsive-16by9">
        <iframe src="<?= $src ?>" frameborder="0" class="embed-responsive-item" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
</div>

