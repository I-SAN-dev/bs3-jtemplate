
<?php if($feature_type == 'icon' && $icon_name): ?>

    <div class="feature-icon">
        <i class="fa <?= $icon_name ?>"></i>
    </div>

<?php elseif($feature_image): ?>

    <div class="feature-image">
        <img src="<?= $feature_image ?>" alt="<?= $title ?>" class="img-responsive" />
    </div>

<?php endif; ?>

