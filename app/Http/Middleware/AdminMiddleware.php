<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            $admin = Auth::guard('admin')->user();

            if ($admin->isAdmin()) { 
                return $next($request);
            }
        }

        return redirect('/admin/login')->with('error', 'You do not have admin access.');
    }
    
}
