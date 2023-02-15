<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');

// Notes
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

// Register
$router->get('/register', 'controllers/register.php');
$router->post('/users', 'controllers/users/store.php');

// Auth
$router->get('/login', 'controllers/login.php');
$router->get('/logout', 'controllers/logout.php');
$router->post('/auth', 'controllers/auth.php');


# User
$router->get('/users', 'controllers/users/index.php');
