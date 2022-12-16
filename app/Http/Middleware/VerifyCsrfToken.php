<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //web.php api végpontok
        "/api/events",
        "/api/events/*",
        "/api/participates",
        "/api/participates/*/*",
        '/api/users/*',
        '/api/users',
        '/api/agencies/',
        '/api/agencies/*',
    ];
}
