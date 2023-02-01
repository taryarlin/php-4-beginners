<?php require('partials/head.php'); ?>
<?php require('partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 text-center">
        <a href="/notes/create" class="px-4 py-2 bg-blue-400 hover:bg-blue-600 rounded">Create New Note</a>

        <ul class="mt-5">
            <?php foreach($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php require('partials/footer.php'); ?>
