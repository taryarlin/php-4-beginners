<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['auth_user'] ?? false) {
            header('location: /admin');
            exit();
        }
    }
}
