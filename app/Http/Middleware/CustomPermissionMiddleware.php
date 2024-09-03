<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Maklad\Permission\Middlewares\PermissionMiddleware;

class CustomPermissionMiddleware extends PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array|string  $permission
     * @return mixed
     */
    public function handle(Request $request, Closure $next, array|string $permission): mixed
    {
        $user = $request->user();

        if(isset($user->is_superadmin) && $user->is_superadmin == 1){
            return $next($request);
        }

        // Bypass permission check if the user has the Super Admin role
        if ($user->hasRole('Super Admin')) {
            return $next($request);
        }

        
        if (!$user->can($permission)) {
            // Redirect to dashboard if permission is not granted
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }

        // Otherwise, proceed with the regular permission check
        return parent::handle($request, $next, $permission);
    }
}

