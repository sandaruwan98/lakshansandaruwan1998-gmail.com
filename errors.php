<?php if (count($errors) > 0) : ?>
    <div>
        <?php foreach ($errors as $error) : ?>
            <span class="badge badge-danger"><?php $error ?></span>
        <?php endforeach ?>

    </div>


<?php endif ?>