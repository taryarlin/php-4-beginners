<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$current_user_id = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();
    authorize($note['user_id'] == $current_user_id);

    $db->query('delete from notes where id = :id', ['id' => $_POST['id']]);

    header('location: /notes');
    exit();
}


$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] == $current_user_id);

view("notes/show.view.php", ['heading' => 'Note Detail', 'note' => $note]);
