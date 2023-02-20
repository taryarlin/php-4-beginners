<?php

use Core\App;

$db = App::resolve('Core\Database');
$current_user_id = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();
authorize($note['user_id'] == $current_user_id);

$db->query('delete from notes where id = :id', ['id' => $_POST['id']]);

echo json_encode(['result' => true, 'message' => 'Note is successfully deleted']);
// header('location: /notes');
// exit();
