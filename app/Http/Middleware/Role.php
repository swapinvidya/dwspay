<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, String $role)
    {
        //dd(Auth::user()->roles->id);
        if (Auth::check() && Auth::user()->roles->id == $role) {
            return $next($request);
        }
        else{
            return redirect()->back()->withErrors(['errors' => 'This Action is Forbiden!.']);
        }
       
    }
}
