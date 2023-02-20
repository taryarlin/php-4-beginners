<?php

use Core\App;
use Core\Database;

if (checkAuth()) {
    $db = App::resolve(Database::class);
    $current_user = getAuthUser();

    $note = $db->query('select * from notes where id = :id and user_id = :user_id', [
        'id' => $_POST['note_id'],
        'user_id' => $current_user['id']
    ])->findOrFail();

    $db->query('update notes set body = :body where id = :id', [
        'body' => $_POST['body'],
        'id' => $_POST['note_id']
    ]);

    setSuccessMessage('Note is successfully updated');

    redirectTo('notes');
} else {
    abort();
}
