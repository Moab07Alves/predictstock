<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;

class EnsureAuthenticated extends Authenticate
{
    /**
     * Get the path to redirect unauthenticated users.
     *
     * This method is triggered when the user is not logged in and attempts
     * to access a protected route. It defines where the application should
     * redirect the user (e.g., login page).
     */
    protected function redirectTo(Request $request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
