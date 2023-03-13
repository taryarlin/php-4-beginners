<?php
namespace Core\Middleware;

class AdminAuthenticated
{
    public function handle()
    {
        if (!$_SESSION['admin_auth_user'] ?? false) {
            header('location: admin/login');
            exit();
        }
    }
}
