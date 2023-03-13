<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (Validator::string($_POST['email']) && !Validator::email($_POST['email'])) {
    array_push($errors, 'Email field is required.');
}

if (!Validator::confirmPassword($_POST['password'], $_POST['password_confirmation'])) {
    array_push($errors, 'Confirm password must be the same as password.');
}

if (!Validator::string($_POST['name'])) {
    array_push($errors, 'Name field is required.');
}

if (!Validator::string($_POST['email'])) {
    array_push($errors, 'Email field is required.');
}

if (!Validator::string($_POST['password'])) {
    array_push($errors, 'Password field is required.');
}

if (!Validator::string($_POST['password_confirmation'])) {
    array_push($errors, 'Confirm password field is required.');
}

if (empty($errors)) {
    $db->query('INSERT INTO shops (account_id, name, email, password, phone, address, profile, created_at, updated_at) VALUES (:account_id, :name, :email, :password, :phone, :address, :profile, :created_at, :updated_at)', [
        'account_id' => $_POST['account_id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => bcrypt($_POST['password']),
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'profile' => $_POST['profile'] ?? '',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
    ]);

    with('success', 'An account is successfully created');
    redirectTo('admin/accounts');
} else {
    view('backend/account/create.view.php', ['errors' => $errors]);
}
