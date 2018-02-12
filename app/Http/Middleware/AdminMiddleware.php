<?php

namespace App\Http\Middleware;

use App\User; 
use Closure;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->is_admin == 1)
        {
            return $next($request);
        }

        return redirect()->guest('/');
    }
}
