<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?= $message ?>
</div>


<table class="table table-striped table-bordered">
    <thead>
        <tr class="active">
            <th class="text-right">Position \ Layout</th>
            <?php foreach($files as $key=>$path): ?>
            <th class="text-center"><?= $key ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allpositions as $position => $hasPosition):?>
        <tr>
            <td class="text-right">
                <?= $position ?>
            </td>
            <?php foreach($files as $key=>$path): ?>

                <?php if($filepositions[$key][$position]): ?>
                    <td class="text-center success">
                        <i class="fa fa-check"></i>
                    </td>
                <?php else: ?>
                    <td class="text-center danger">
                        <i class="fa fa-times"></i>
                    </td>
                <?php endif; ?>

            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>