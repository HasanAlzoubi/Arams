<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if ($guard == 'user') {
                notify()->success('اهلا وسهلا');
                return redirect(RouteServiceProvider::User);
            }
            if ($guard == 'Administrator') {
                return redirect(RouteServiceProvider::Administrator);
            }

            else {
                return redirect(RouteServiceProvider::Admin);
            }
        }

        return $next($request);
    }

}
