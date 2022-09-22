<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = \request()->header('authorization');
        if (!$token) {
            return response([
                'status' => 0,
                'message' => 'token_not_provided',
                'data' => NULL,
            ], 401);
        }
        $check_token = 'Bearer eyJpc3MiOiJpbm5vdGVjaCIsImlhdCI6MTYwMzMzNjUxMCwiZXhwIjoxNjM0ODcyNTEwLCJhdWQiOiJ2bnBvc3QiLCJzdWIiOiJ2bnBvc3QiLCJSb2xlIjpbImFkbWluIiwibWVtYmVyIl19';
        if($token != $check_token){
            return response([
                'status' => 0,
                'message' => 'token_expired',
                'data' => NULL,
            ], 401);
        }
        return $next($request);
    }
}
