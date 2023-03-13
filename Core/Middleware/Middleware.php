<?php
namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Authenticated::class,
        'admin_auth' => AdminAuthenticated::class,
    ];

    public static function resolve($key)
    {
        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false; // Core/Middleware/Guest.php

        if (!$middleware) {
            // custom error message ပြတာ - throw exception
            throw new \Exception("No matching middleware found for key {$key}");
        }

        (new $middleware)->handle();
    }
}
