<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Auth;
use App\Adminuser;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    /*public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('student.index');
        }

        return $next($request);
    }*/



    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }





}
