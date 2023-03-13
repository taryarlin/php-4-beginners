<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user = $db->query('SELECT * from users where id = :id', ['id' => $_POST['id']])->findOrFail();

$db->query('DELETE FROM users WHERE id = :id', ['id' => $_POST['id']]);

with('success', 'Admin account is successfully deleted');
redirectTo('admin/accounts');
