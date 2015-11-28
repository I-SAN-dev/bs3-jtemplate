
<div class="sppb-addon sppb-addon-tab <?= $class ?>">
    <?php if($title): ?>
        <<?= $heading_selector ?> class="sppb-addon-title"><?= $title ?></<?= $heading_selector ?>>
    <?php endif; ?>

    <div class="sppb-addon-content sppb-tab">

        <ul class="nav nav-<?= $style ?>">
            <?php foreach($sppbTabArray as $key=>$tab): ?>
                <li class="<?= ($key==0) ? "active" : "" ?>">
                    <a role="tab" data-toggle="tab" href="#tab-<?= $tagNumber ?>-<?= $key ?>">
                        <?= $tab['icon']?> <?= $tab['title']?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="tab-content">
            <?php foreach($sppbTabArray as $key=>$tab): ?>
                <div class="tab-pane fade <?= ($key==0) ? "active in" : "" ?>" id="tab-<?= $tagNumber ?>-<?= $key ?>">
                    <?= $tab['content'] ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

