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
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $roles = $roles ?? null;

        foreach ($roles as $role) {
            if(Auth::user()->role == null){
                return dd("login user");
            }
            if (Auth::user()->role == 'admin') {
                return dd("login admin");
            }
            if (Auth::user()->role == 'user') {
                return dd("login user");
            }
            return redirect(RouteServiceProvider::DASHBOARD);
            return $next($request);
        }

        return $next($request);
    }
}
