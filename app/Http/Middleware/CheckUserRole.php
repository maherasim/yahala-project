<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/login'); // Redirect to login if not authenticated
        }

        $user = Auth::user();

        if(isset($user->is_superadmin) && $user->is_superadmin == 1){
            return $next($request);
        }

        // Check if the user has the required role
        if (!$user->hasRole($role)) {  // Assuming you have a method `hasRole` on your User model
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }

        // Proceed to the next middleware or request handler
        return $next($request);
    }
}
