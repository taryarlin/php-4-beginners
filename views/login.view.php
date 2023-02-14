<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<section class="mx-auto max-w-lg py-20 sm:px-6 lg:px-8 mt-4">
    <div class="bg-gray-100 shadow-md p-4 rounded-md">
        <h3 class="mb-2 text-xl text-blue-700">Login</h3>

        <hr class="mb-2">

        <?php include(base_path('views/partials/page_info.php')) ?>

        <form autocomplete="off" method="POST" action="/auth" enctype="multipart/form-data" id="login_form">
            <div class="mb-3">
                <label for="email" class="block mb-1 text-sm">Email <span class="text-rose-600">*</span></label>
                <input type="email" name="email" id="email" class="w-full rounded h-7 px-2 text-sm">
            </div>

            <div class="mb-3">
                <label for="password" class="block mb-1 text-sm">Password <span class="text-rose-600">*</span></label>
                <input type="password" name="password" id="password" class="w-full rounded h-7 px-2 text-sm">
            </div>

            <p class="text-xs text-gray-600 my-3 inline-block">Doesn't have an account ? <a href="/register" class="text-blue-600 hover:text-blue-700 hover:underline">Signup here</a></p>

            <a href="#" class="text-xs text-blue-600 my-3 inline-block float-right hover:underline hover:text-blue-700">Forgot Password</a>

            <hr>

            <div class="w-full mt-3 text-center">
                <a href="/" class="text-sm px-3 py-1 bg-gray-400 hover:bg-gray-600 rounded-md text-white mr-2">Cancel</a>
                <button type="submit" class="text-sm px-3 py-1 bg-blue-600 hover:bg-blue-700 rounded-md text-white">Submit</button>
                <div class="clear-right"></div>
            </div>
        </form>
    </div>
</section>

<?php require base_path('views/partials/footer.php'); ?>

<script>
    $('#register_form').validate({
        rules: {
            username: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                numeric: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            username: {
                required: 'Hello world'
            }
        }
    });
</script>
