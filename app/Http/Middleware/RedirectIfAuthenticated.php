<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                    if (Auth::guard($guard)->check()) {
                        return redirect('admin/home');
                    }
                break;
            
            default:
                    if (Auth::guard($guard)->check()) {
                        return redirect('/home');
                    }
                break;
        }

        return $next($request);
    }
}
