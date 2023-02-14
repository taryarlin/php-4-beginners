<?php


use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'The body field is required and cannot be more than 1,000 characters';
}

if (empty($errors)) {
    $db->query("INSERT INTO notes(body, user_id, created_at) VALUES (:body, :user_id, :created_at)", [
        'body' => $_POST['body'],
        "user_id" => 1,
        'created_at' => date('Y-m-d H:i:s'),
    ]);

    $_POST['body'] = '';

    header('location: /notes');
    exit();
}

$_SESSION['errors'] = $errors;

header('location: /notes/create');
exit();
