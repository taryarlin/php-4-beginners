<?php

use Core\App;
use Core\Database;

if (checkAuth()) {
    $db = App::resolve(Database::class);
    $current_user = getAuthUser();

    $note = $db->query('select * from notes where id = :id and user_id = :user_id', [
        'id' => $_GET['id'],
        'user_id' => $current_user['id']
    ])->findOrFail();

    view('notes/edit.view.php', ['heading' => 'Edit Note', 'note' => $note]);
} else {
    abort();
}
