<?php
use Core\App;
use Core\Validator;

require base_path('Core/Validator.php');

$db = App::resolve('Core\Database');

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'The body field is required and cannot be more than 1,000 characters';
}

if (empty($errors)) {
    $db->query("INSERT INTO notes(body, user_id) VALUES (:body, :user_id)", [
        'body' => $_POST['body'],
        "user_id" => 1
        // 'user_id' => rand(1, 5)
    ]);

    $_POST['body'] = '';

    header('location: /notes');
    exit();
}

header('location: /notes/create');
exit();
