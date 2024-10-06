<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $type
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type)
    {
        // Check if the user is authenticated and has the required user type
        if (Auth::check() && Auth::user()->UserType === $type) {
            return $next($request);
        }

        // Redirect or respond with an error if the user type does not match
        return redirect('/')->with('error', 'You do not have the required permissions.');
    }
}
