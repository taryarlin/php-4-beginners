<?php

if (checkAuth()) {
    abort();
}

view('login.view.php', ['heading' => 'Login']);
