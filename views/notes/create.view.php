<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-2 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST" action="/notes" id="note_form">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div>
                            <?php if(isset($_SESSION['errors'])) : ?>
                                <div class="px-4 py-3 bg-red-100 text-rose-700 rounded mb-4"><?= $_SESSION['errors']['body'] ?></div>
                            <?php endif ?>

                                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>

                                <div class="mt-1">
                                    <textarea
                                        id="body"
                                        name="body"
                                        rows="3"
                                        placeholder="Here's an ida for a note..."
                                        class="p-4 mt-1 block w-full rounded-md border-gray-300 shadow-sm summernote"
                                    ><?= $_POST['body'] ?? '' ?></textarea>

                                    <?php if(isset($errors['body'])) : ?>
                                        <p class="text-red-500 text-xs mt-22"><?= $errors['body'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 ">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>

<script>
    $('#note_form').validate({
        rules: {
            body: {
                required: true,
            }
        }
    });
</script>
