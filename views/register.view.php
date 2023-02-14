<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<section class="mx-auto max-w-xl py-6 sm:px-6 lg:px-8 mt-4">
    <div class="bg-gray-100 shadow-md p-4 rounded-md">
        <h3 class="mb-2 text-xl text-blue-700">Register</h3>

        <hr class="mb-2">

        <form autocomplete="off" method="POST" action="/users" enctype="multipart/form-data" id="register_form">
            <div class="mb-3">
                <label for="name" class="block mb-1 text-sm">Username <span class="text-rose-600">*</span></label>
                <input type="text" name="username" id="name" class="w-full rounded h-7 px-2 text-sm">
            </div>

            <div class="mb-3">
                <label for="email" class="block mb-1 text-sm">Email <span class="text-rose-600">*</span></label>
                <input type="email" name="email" id="email" class="w-full rounded h-7 px-2 text-sm">
            </div>

            <div class="mb-3">
                <label for="phone" class="block mb-1 text-sm">Phone <span class="text-rose-600">*</span></label>
                <input type="text" name="phone" id="phone" class="w-full rounded h-7 px-2 text-sm">
            </div>

            <div class="mb-3">
                <label for="password" class="block mb-1 text-sm">Password <span class="text-rose-600">*</span></label>
                <input type="password" name="password" id="password" class="w-full rounded h-7 px-2 text-sm">
            </div>

            <label class="block mb-2 text-sm">Gender</label>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="default-radio-1" class="ml-2 text-sm text-gray-900">Male</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="default-radio-2" class="ml-2 text-sm text-gray-900">Female</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-3" type="radio" value="" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="default-radio-3" class="ml-2 text-sm text-gray-900">Other</label>
            </div>

            <div class="mt-3">
                <label for="address" class="block mb-1 text-sm">Address</label>
                <textarea name="address" class="w-full rounded p-2 text-sm"></textarea>
            </div>

            <div class="mb-3">
                <label for="profile" class="block mb-1 text-sm">Profile </label>
                <input type="file" name="profile" id="profile" class="w-full rounded h-7 px-2 text-sm">
            </div>

            <p class="text-xs text-gray-600 my-3">Already have account ? <a href="/login" class="text-blue-600 hover:text-blue-700">Login here</a></p>

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
