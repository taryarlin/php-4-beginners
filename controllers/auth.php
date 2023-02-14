<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$user = $db->query("select * from users where email = :email and password = :password", [
    'email' => $email,
    'password' => $password
])->find();

if (false != $user) {
    $_SESSION['auth_user'] = $user;
    setSuccessMessage('Welcome back! Your are logged in successfully');
    redirectTo('notes');
} else {
    setError('These credentials does not match our records.');
    redirectTo('login');
}
