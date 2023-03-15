<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = bcrypt($_POST['password']);

$user = $db->query('SELECT * from users where email = :email AND password = :password AND is_admin = :is_admin', [
    'email' => $email,
    'password' => $password,
    'is_admin' => 1
])->find();

if ($user) {
    login($user);

    redirectTo('admin');
}

setError('These credentials does not match our records');
redirectTo('admin');
