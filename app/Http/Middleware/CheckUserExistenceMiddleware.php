<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserExistenceMiddleware
{
    public function handle($request, Closure $next)
    {
        $message = 'this is a message from a middleware';
        view()->share('middlewareMessage', $message);

        return $next($request);
    }
}
