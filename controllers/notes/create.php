<?php

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'The body field is required and cannot be more than 1,000 characters';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes(body, user_id) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => rand(1, 5)
        ]);

        $_POST['body'] = '';
    }
}

view("notes/create.view.php", ['heading' => 'Create Note']);
