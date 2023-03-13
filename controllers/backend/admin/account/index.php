<?php

use Core\App;
use Core\Database;

$users = (App::resolve(Database::class))->query('SELECT * FROM users')->get();

view('backend/account/index.view.php', ['users' => $users]);
