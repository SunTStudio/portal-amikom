<?php
use Illuminate\Http\Request;
use App\Http\Middleware\AuthLogin;
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
        $middleware->redirectGuestsTo('/login/login');
 
    // Using a closure...
        $middleware->redirectGuestsTo(fn (Request $request) => route('portal.login'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
