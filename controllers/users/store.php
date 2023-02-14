<?php

use Core\App;
use Carbon\Carbon;
use Core\Database;

$db = App::resolve(Database::class);

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);
$gender = $_POST['gender'];
$address = $_POST['address'] == '' ? null : $_POST['address'];

$profile_name =   "images/" . date("Y-m-d-H:i:s") . $_FILES['profile']['name'];
$profile_tmp = $_FILES['profile']['tmp_name'];

move_uploaded_file($profile_tmp, $profile_name);

$db->query(
    "INSERT INTO users(username, email, phone, password, gender, address, profile)
        VALUES (:username, :email, :phone, :password, :gender, :address, :profile)",
    [
        'username' => $username,
        'email'    => $email,
        'phone'    => $phone,
        'password' => $password,
        'gender'   => $gender,
        'address'  => $address,
        'profile' => $profile_name
    ]
);

header('location: /');
exit();
