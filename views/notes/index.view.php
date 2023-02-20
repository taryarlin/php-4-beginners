<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
<?php include(base_path('views/partials/page_info.php')) ?>

    <div class="mx-auto max-w-4xl py-6">
        <div class="mb-6">
            <a href="/notes/create" class="px-3 py-2 bg-blue-700 hover:bg-blue-800 rounded text-white rounded">Add Note</a>
        </div>

        <div class="p-4 shadow-xl rounded bg-gray-100">
            <table class="mt-5" id="data_table">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Body</th>
                        <th width="20%">Action</th>
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
                                <a href="/note/edit?id=<?= $note['id'] ?>" class="px-3 py-1 bg-yellow-500 rounded text-white text-sm">Edit</a>
                                <a href="#" class="px-3 py-1 bg-rose-600 rounded text-white text-sm delete_note" data-id="<?= $note['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>

<script>
    $('#data_table').DataTable();

    $(document).on('click', '.delete_note', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/note',
                    method: 'POST',
                    data: {
                        id: $(this).data('id'),
                        _method: 'DELETE'
                    }
                }).done((result) => {
                    location.reload();
                })
            }
        })
    })
</script>
