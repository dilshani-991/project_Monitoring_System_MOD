<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // Check if the user has the required role
        if ($user->role != $role) {
            return response()->json(['You do not have permission to access this page.']);
            // Alternatively, you can use a view for error message
            // return response()->view('errors.check-permission');
        }

        return $next($request);
    }
}




