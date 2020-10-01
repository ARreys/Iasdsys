<?php

namespace App\Http\Middleware;

use Closure;

class Login
{
    public function handle($request, Closure $next)
    {
        if(!session()->has("login") || session("login") === false){
            session(['msg' => [
                'tipo' => 'erro',
                'texto' => 'Realize login para acessar a administração!'
            ]]);
            return redirect()->route("inicio");
        }
        return $next($request);
    }
}
