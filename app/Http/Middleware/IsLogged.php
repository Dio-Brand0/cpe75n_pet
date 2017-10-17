<?php

namespace App\Http\Middleware;

use Closure;

class IsLogged
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
        if (!session('name')) {
            return redirect('login');
        }
        return $next($request);
    }
}
