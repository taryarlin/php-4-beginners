<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
<?php include(base_path('views/partials/page_info.php')) ?>

    <div class="mx-auto max-w-7xl py-6">
        <div class="mb-6">
            <a href="/notes/create" class="px-3 py-2 bg-blue-700 hover:bg-blue-800 rounded text-white rounded">Add Note</a>
        </div>

        <div class="p-4 shadow-xl rounded bg-gray-100">
            <table class="mt-5" id="data_table">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($notes as $key => $note) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>

                            <td>
                                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                                    <?= htmlspecialchars($note['body']) ?>
                                </a>
                            </td>

                            <td>
                                <a href="#" class="px-3 py-1 bg-rose-600 rounded text-white text-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
