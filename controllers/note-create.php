<?php

require 'Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'The body field is required and cannot be more than 1,000 characters';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes(body, user_id) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

        $_POST['body'] = '';
    }
}

require "views/note-create.view.php";
