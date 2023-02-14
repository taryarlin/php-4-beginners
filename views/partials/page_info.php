<?php if(isset($_SESSION['errors'])) : ?>
    <div id="error_message" class="px-4 py-3 bg-red-100 text-rose-700 rounded mb-4">
        <ul class="list-disc px-3">
            <?php foreach($_SESSION['errors'] as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if(isset($_SESSION['success'])) : ?>
    <div id="success_message" class="px-4 py-3 bg-green-100 text-green-700 rounded mb-4">
        <?= $_SESSION['success'] ?>
    </div>
<?php endif ?>
