<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attribute = [])
{
    extract($attribute);

    require base_path('views/' . $path);
}

function redirectTo($path = '')
{
    header("location: /{$path}");
    exit();
}

function setError($message)
{
    $errors[] = $message;

    $_SESSION['errors'] = $errors;
}

function setSuccessMessage($message)
{
    $_SESSION['success'] = $message;
}

function with($key, $message)
{
    $_SESSION[$key] = $message;
}

function session($key)
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }

    return null;
}

function checkAuth()
{
    return isset($_SESSION['auth_user']);
}

function getAuthUser()
{
    if (checkAuth()) {
        return $_SESSION['auth_user'];
    }

    return null;
}

function bcrypt($value)
{
    return md5($value);
}

function login($user)
{
    $_SESSION['auth_user'] = $user;
}

function logout()
{
    unset($_SESSION['auth_user']);
}

function str_random($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function upload($file, $path)
{
    // Check for errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('Upload failed with error code ' . $file['error']);
    }

    // Move the uploaded file to a new location
    $destination =  $path . str_random(10) . '_' . $file['name'];
    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        throw new Exception('Failed to move uploaded file');
    }

    return $destination;
}
