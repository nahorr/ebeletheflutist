<?php

namespace App\Http\Middleware;

use App\User; 
use Closure;
use Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
         if (Auth::user() &&  Auth::user()->admin == 1) {
            return $next($request);
         }

        return redirect('/home');
    }
}
