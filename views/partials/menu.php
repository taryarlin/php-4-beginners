<div class="flex space-x-4">
    <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

    <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>

    <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Notes</a>

    <a href="/users" class="<?= urlIs('/users') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">User</a>

    <a href="/register" class="<?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Register</a>

    <?php if(!checkAuth()) : ?>
    <a href="/login" class="<?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Login</a>
    <?php endif ?>

    <?php if(checkAuth()) : ?>
    <a href="/logout" class="<?= urlIs('/logout') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Logout</a>
    <?php endif ?>
</div>
