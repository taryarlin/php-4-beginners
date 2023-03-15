<?php
namespace Core\Middleware;

class AdminAuthenticated
{
    public function handle()
    {
        if (!$_SESSION['auth_user'] ?? false) {
            header('location: /admin/login');
            exit();
        }
    }
}
