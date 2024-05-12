<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            '/api/ofertas2', // <-- exclude this route
            '/api/ofertas',
            '/api/ofertasUser',
            '/api/ofertas/*',
            '/api/sectores*'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
