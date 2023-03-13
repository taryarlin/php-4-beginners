<?php

use Core\App;
use Core\Database;

$user = (App::resolve(Database::class))
        ->query('SELECT * from users where id = :id', ['id' => $_GET['id']])
        ->findOrFail();

view('backend/account/delete.view.php', ['user' => $user]);
