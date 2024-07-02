<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        if ($user->role != $role) {
            return redirect('/login')->withErrors('You do not have access to this section.');
        }

        return $next($request);
    }
}
