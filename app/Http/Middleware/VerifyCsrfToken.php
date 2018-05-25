<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'https://www.janchristlieb.de/',
        'https://www.janchristlieb.de/about/*',
        'https://www.janchristlieb.de/legal/*',
        'https://www.janchristlieb.de/privacy/*',
        'https://www.janchristlieb.de/projects/*',
    ];
}
