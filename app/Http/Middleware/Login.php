<?php

namespace App\Http\Middleware;

use Closure;

class Login
{
    public function handle($request, Closure $next)
    {
        if(!session()->has("login") || session("login") === false){
            return redirect()->route("inicio");
        }
        return $next($request);
    }
}
