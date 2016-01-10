
<div class="mitarbeiter <?= $class ?>">

    <div class="row">
        <div class="col-xs-3">
            <?php if($avatar): ?>
                    <img src="<?= $avatar ?>" alt="<?= $title ?>" class="img-responsive img-circle"/>
            <?php endif; ?>
        </div>
        <div class="col-xs-9">
            <h3>
                <?= $title ?>
                <?php if($position): ?>
                    <br/>
                    <small>
                        <?= $position ?>
                    </small>
                <?php endif; ?>
            </h3>
            <hr/>
            <?= $text ?>
        </div>
    </div>

</div>

