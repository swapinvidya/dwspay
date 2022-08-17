<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::user()->roles->id; 
                switch ($role) {
                    case 1:
                        return '/Admin';
                        break;
                    case 2:
                        return '/Admin';
                        break;

                    case 3:
                        return '/SuperDist';
                        break;
                    case 4:
                        return '/Distributer';
                        break;
                    case 5:
                        return '/APIPartner';
                        break;
                    case 6:
                        return '/Retailer';
                        break;
                    default:
                        return '/'; 
                        break;
                    }
            }
        }

        return $next($request);
    }
}
