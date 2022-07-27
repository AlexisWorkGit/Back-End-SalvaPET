<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class OwnerGuest
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
        if(Auth::guard('owner')->check())
        {
            return redirect()->route('owner.index');
        }

        return $next($request);
    }
}
