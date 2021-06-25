<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Firebase\JWT\JWT;

class AuthenticateJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->cookie('token')) {
            JWT::decode($request->cookie('token'), config('app.jwt_secret_key'),['HS256']);
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}
