<?php

$config = require('config.php');
$db = new Database($config['database']);

$current_user_id = 1;

$heading = "Note";

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

if ($note['user_id'] != $current_user_id) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
