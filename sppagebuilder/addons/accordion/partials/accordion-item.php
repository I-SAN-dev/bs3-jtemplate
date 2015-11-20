
<div class="panel <?= $sppbAccordionStyle ?>">
    <a class="panel-heading" role="button" data-toggle="collapse" data-parent="#<?= $sppbAccordionId ?>" href="#collapse-<?= $tagNumber ?>">
        <span class="panel-title"><?= $title ?></span>
    </a>
    <div id="collapse-<?= $tagNumber ?>" class="panel-collapse collapse" role="tabpanel">
        <div class="panel-body">
            <?= $content ?>
        </div>
    </div>
</div>

