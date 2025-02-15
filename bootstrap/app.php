<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['web', 'auth', 'admin'])
                ->prefix('admin')
                ->group(base_path('routes/backend.php'));

            Route::middleware(['web', 'auth', 'admin'])
                ->prefix('admin/settings')
                ->group(base_path('routes/settings.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin'    => AdminMiddleware::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
