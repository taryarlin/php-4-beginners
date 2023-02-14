<?php

use Core\App;

$db = App::resolve('Core\Database');

if (!isset($_SESSION['auth_user'])) {
    abort(403);
}

$notes = $db->query('select * from notes where user_id = 1')->get();

view('notes/index.view.php', ['notes' => $notes, 'heading' => 'My Notes']);
