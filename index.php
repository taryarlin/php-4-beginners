<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);

$id = $_GET['id'];

$query = "select * from posts where id = :id";

// select * from table_name; fetchAll - table ထဲက အကုန်လုံးဆွဲထုတ်တာ
// select * from table_name where id = :id; fetch - table ထဲနေ id နဲ့ တစ်ခုပဲဆွဲထုတ်တာ


$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);

// CRUD - Create, Read, Update, Delete
