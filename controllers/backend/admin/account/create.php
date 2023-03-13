<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$owners = $db->query('select * from accounts where role = :role', ['role' => 'partner'])->get();

view('backend/account/create.view.php', compact('owners'));
