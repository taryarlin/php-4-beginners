<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$users = $db->query('select * from users')->get();

$response = ['data' => $users];

echo json_encode($response);
