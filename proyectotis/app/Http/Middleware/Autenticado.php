<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class Autenticado
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
        if(!Auth::check())
            return redirect('/usuario/login');
        return $next($request);
    }
}
