<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Assuming you have a 'role' field in your users table to check if the user is an admin
        if (Auth::check() && Auth::user()->isadmin === 1) {
            return $next($request);
        }

        return redirect('/home'); // Redirect to home if not an admin
    }
}

