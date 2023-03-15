<?php

use Carbon\Carbon;
use Core\App;
use Core\Database;
use Core\Validator;

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
    $db = App::resolve(Database::class);

    if (isset($_FILES['profile']['name']) && $_FILES['profile']['name'] !== '') {
        $file_name = upload($_FILES['profile'], 'assets/images/');
    }

    $db->query('
        INSERT INTO partners
            (name, email, password, phone, dob, address, profile)
        VALUES
            (:name, :email, :password, :phone, :dob, :address, :profile)
        ', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => bcrypt($_POST['password']),
            'phone' => $_POST['phone'] ?? null,
            'dob' => $_POST['dob'] != '' ? Carbon::parse($_POST['dob'])->format('Y-m-d') : null,
            'address' => $_POST['address'] ?? null,
            'profile' => $file_name ?? null
        ]);

    with('success', 'A partner is successfully created.');
    redirectTo('admin/partners');
} else {
    view('backend/partner/create.view.php', ['errors' => $errors]);
}
