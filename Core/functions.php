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
