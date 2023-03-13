<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');

# Admin
$router->get('/admin', 'controllers/backend/admin/index.php')->only('auth');
$router->get('/admin/accounts', 'controllers/backend/admin/account/index.php')->only('auth');
$router->get('/admin/accounts/create', 'controllers/backend/admin/account/create.php')->only('auth');
$router->post('/admin/accounts', 'controllers/backend/admin/account/store.php')->only('auth');
$router->get('/admin/accounts/delete', 'controllers/backend/admin/account/delete.php')->only('auth');
$router->delete('/admin/accounts/destroy', 'controllers/backend/admin/account/destroy.php')->only('auth');

$router->get('/admin/login', 'controllers/backend/admin/getLogin.php')->only('guest');
$router->post('/admin/login', 'controllers/backend/admin/login.php')->only('guest');
$router->get('/admin/logout', 'controllers/backend/admin/logout.php')->only('auth');

// Notes
# Read
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
# Create
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');
# Update
$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note', 'controllers/notes/update.php');
# Delete
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
